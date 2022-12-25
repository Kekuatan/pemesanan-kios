<div class="card p-2">
    <p class="text-center"> {{$title}}</p>
    <table class="table b-table" aria-busy="false" aria-colcount="6">
        <!----><!---->
        <thead role="rowgroup" class=""><!---->
        <tr role="row" class="">
            <th role="columnheader" scope="col" aria-colindex="2" class="">
                <div>Tangal</div>
            </th>
            @if(in_array('payment_provider',$groupBy))
                <th role="columnheader" scope="col" aria-colindex="2" class="">
                    <div>Bank</div>
                </th>
            @endif

            @if(in_array('payment_method',$groupBy))
                <th role="columnheader" scope="col" aria-colindex="2" class="">
                    <div>Jenis Pembayaran</div>
                </th>
            @endif
            <th role="columnheader" scope="col" aria-colindex="3" class="">
                <div> Jumlah</div>
            </th>
        </tr>
        </thead>
        <tbody role="rowgroup"><!---->

        @foreach ($data as $day)
            @php
                $sum = collect($data)->sum('sums');
            @endphp
            <tr role="row" class="bg-white font-small-2">
                <td aria-colindex="2" role="cell" class="">
                    <div>{{optional($day)['date']}}</div>
                </td> <!--Nama</div-->
                @if(in_array('payment_provider',$groupBy))
                    <td aria-colindex="2" role="cell" class="">
                        <div>{{optional($day)['payment_provider']}}</div>
                    </td> <!--Nama</div-->
                @endif
                @if(in_array('payment_method',$groupBy))
                    <td aria-colindex="2" role="cell" class="">
                        <div>{{optional($day)['payment_method']}}</div>
                    </td> <!--Nama</div-->
                @endif
                <td aria-colindex="3" role="cell" class="">
                    <div>{{optional($day)['sums']}}</div>
                </td> <!--Nomer Tempat Usaha-->
            </tr>
        @endforeach
        </tbody><!---->
    </table>
</div>
