<?php

namespace App\Services;

use App\Models\Payment;
use Illuminate\Support\Facades\DB;

class ReportService
{
    public function paymentFilterSubquery($queryStr, $filters, $groups, $groupCategory )
    {
        $isPaymentProvider = !blank(optional($filters)['payment_provider_id']);
        $isPaymentMethod = !blank(optional($filters)['payment_method_id']);

        $queryStrPaymentProvider =", any_value((select name from payment_providers where id = payment_provider_id)) as payment_provider";
        $queryStrPaymentMethodId = "any_value((select payment_method_id from price_lists where id =  any_value((select price_list_id from products where id = product_id))))";

        if ($isPaymentProvider) {
            $queryStr = $queryStr . $queryStrPaymentProvider;
            $groups[] = 'payment_provider';
        } else {
            $groups = (collect($groups)->unique()->filter(function ($value, $key) {
                return $value != 'payment_provider';
            })->toArray());
        }

        if ($isPaymentMethod) {
            $paymentMethodId = $filters['payment_method_id'] ?? $queryStrPaymentMethodId;
            $queryStr = $queryStr . ", any_value((select name from payment_methods where id = " . $paymentMethodId . "))   as payment_method";
            $groups[] = 'payment_method';
        } else {
            $groups = (collect($groups)->unique()->filter(function ($value, $key) {
                return $value != 'payment_method';
            })->toArray());

        }

        if (!blank($groupCategory)) {
            $group = collect($groups)->toArray();
            if ($groupCategory == 'all') {
                if (!in_array('payment_provider', $group)) {
                    $queryStr = $queryStr . $queryStrPaymentProvider;
                    $groups[] = 'payment_provider';
                }

                if (!in_array('payment_method', $group)) {
                    $paymentMethodId = $queryStrPaymentMethodId;
                    $queryStr = $queryStr . ", any_value((select name from payment_methods where id = " . $paymentMethodId . "))   as payment_method";
                    $groups[] = 'payment_method';
                }
            }

            if ($groupCategory == 'method') {
                if (!in_array('payment_method', $group)) {
                    $paymentMethodId = $queryStrPaymentMethodId;
                    $queryStr = $queryStr . ", any_value((select name from payment_methods where id = " . $paymentMethodId . "))   as payment_method";
                    $groups[] = 'payment_method';
                }
            }

            if ($groupCategory == 'bank') {
                if (!in_array('payment_provider', $group)) {
                    $queryStr = $queryStr . $queryStrPaymentProvider;
                    $groups[] = 'payment_provider';
                }
            }
        }


        return ["queryStr" => $queryStr, "groups" => $groups];
    }
}
