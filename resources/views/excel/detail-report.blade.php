<div>
    <p class="text-center"> {{$title}}</p>
    <table role="table" class="table b-table">
        <!----><!---->
        <thead role="rowgroup" class=""><!---->
        <tr role="row" class="">
            <th role="columnheader" scope="col" aria-colindex="2" class="">
                <div>Nama</div>
            </th>
            <th role="columnheader" scope="col" aria-colindex="2" class="">
                <div>KTP</div>
            </th>
            <th role="columnheader" scope="col" aria-colindex="3" class="">
                <div>Nomer Tempat Usaha</div>
            </th>
            <th role="columnheader" scope="col" aria-colindex="4" class="">
                <div>Luas</div>
            </th>

            <th role="columnheader" scope="col" aria-colindex="4" class="">
                <div>Harga</div>
            </th>
            <th role="columnheader" scope="col" aria-colindex="6" class="">
                <div>Discount %</div>
            </th>
            <th role="columnheader" scope="col" aria-colindex="6" class="">
                <div>Custom discount</div>
            </th>

            <th role="columnheader" scope="col" aria-colindex="6" class="">
                <div>Nominal Discount</div>
            </th>
            <th role="columnheader" scope="col" aria-colindex="6" class="">
                <div>Harga setelah discount</div>
            </th>
            <th role="columnheader" scope="col" aria-colindex="6" class="">
                <div>PPN</div>
            </th>
            <th role="columnheader" scope="col" aria-colindex="5" class="">
                <div>Harga total</div>
            </th>
            <th role="columnheader" scope="col" aria-colindex="6" class="">
                <div>Jenis Pembayaran</div>
            </th>
            <th role="columnheader" scope="col" aria-colindex="6" class="">
                <div>Pembayaran</div>
            </th>
            <th role="columnheader" scope="col" aria-colindex="6" class="">
                <div>Total Pembayaran</div>
            </th>
            <th role="columnheader" scope="col" aria-colindex="6" class="">
                <div>Sisa Pembayaran</div>
            </th>
        </tr>
        </thead>
        <tbody role="rowgroup"><!---->

        @foreach ($searchs as $search)
            @foreach($search['payments'] as $payment)
                @php
                    $sumPayment = collect($search['payments'])->where('created_at','<=',$payment['created_at'])->sum('amount');
                    $sumLeft = $search['calculation_total_price']-$sumPayment;
                @endphp
                <tr role="row" class="bg-white font-small-2">
                    <td aria-colindex="2" role="cell" class="">
                        <div>{{$search['siho_name']}}</div>
                    </td> <!--Nama</div-->
                    <td aria-colindex="2" role="cell" class="">
                        <div>{{$search['siho_ktp_no']}}</div>
                    </td>
                    <td aria-colindex="3" role="cell" class="">
                        <div>{{$search['tu_no']}}</div>
                    </td> <!--Nomer Tempat Usaha-->
                    <td aria-colindex="5" role="cell" class="">
                        <div>{{$search['tu_area']}}</div>
                    </td> <!--Luas</div-->
                    <td aria-colindex="6" role="cell" class="">
                        <div>{{$search['calculation_price']}}</div>
                    </td> <!--Harga</div-->
                    <td aria-colindex="6" role="cell" class="">
                        <div>{{$search['calculation_discount_rate'] * 100}}%</div>
                    </td> <!--Discount %</-->
                    <td aria-colindex="6" role="cell" class="">
                        <div>{{$search['discount_price']}}</div>
                    </td><!--Custom discount</-->
                    <td aria-colindex="6" role="cell" class="">
                        <div>{{$search['calculation_discount']}}</div>
                    </td> <!--Nominal Discount</-->
                    <td aria-colindex="6" role="cell" class="">
                        <div>{{$search['calculation_price_with_discount']}}</div>
                    </td><!--Harga setelah discount-->
                    <td aria-colindex="6" role="cell" class="">
                        <div>{{$search['calculation_ppn']}}</div>
                    </td> <!--Harga setelah PPN-->
                    <td aria-colindex="6" role="cell" class="">
                        <div>{{$search['calculation_total_price']}}</div>
                    </td>  <!--Harga total</-->
                    <td aria-colindex="6" role="cell" class="">
                        <div>{{$search['price_list']['payment_method']['name']}}</div>
                    </td>
                    <td aria-colindex="6" role="cell" class="">
                        <div>{{$payment['amount']}}</div>
                    </td><!--Pembayaran</div-->
                    <td aria-colindex="6" role="cell" class="">
                        <div>{{$sumPayment}}</div>
                    </td> <!--Total Pembayaran</-->
                    <td aria-colindex="6" role="cell" class="">
                        <div>{{$sumLeft }}</div>
                    </td> <!--Sisa Pembayaran</-->
                </tr>
            @endforeach
        @endforeach
        </tbody><!---->
    </table>
</div>



