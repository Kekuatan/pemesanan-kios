<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PriceList extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];

    public function paymentMethod()
    {
        return  $this->belongsTo(PaymentMethod::class);
    }

    public function paymentProvider()
    {
        return  $this->belongsTo(PaymentProvider::class);
    }
}
