<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="container">

        <div class="row content-header">
            <div class="bredcumb-header-dasboard content-header-left mb-2 col-md-9 col-12">
                <div class="row breadcrumbs-top">
                    <div class="col-12"><h2 class="content-header-title float-left pr-1 mb-0"> Pemesanan Kios</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}"
                                                               class="router-link-active" target="_self">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="align-text-top feather feather-home">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                    </a></li>
                                <li class="breadcrumb-item active"><span
                                        aria-current="location"> Verifikasi pembayaran</span></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right d-md-block d-none mb-1 col-md-3 col-12">
                <div class="dropdown b-dropdown btn-group" id="__BVID__2011"><!---->
                    <a href="{{url('/logout')}}">
                        <button type="button"  class="btn btn-icon btn-primary">
                            <svg  width="14px" height="14px" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-settings">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path
                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                            </svg>

                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="mb-0 table-responsive" data-v-aa799a9e="">
            <table role="table" aria-busy="false" aria-colcount="6" class="table b-table" id="__BVID__3462">
                <!----><!---->
                <thead role="rowgroup" class=""><!---->
                <tr role="row" class="">

                    <th role="columnheader" scope="col" aria-colindex="2" class="">
                        <div>Nomer invoice</div>
                    </th>
                    <th role="columnheader" scope="col" aria-colindex="3" class="">
                        <div>No Tempat Usaha</div>
                    </th>
                    <th role="columnheader" scope="col" aria-colindex="4" class="">
                        <div>Total Pembayaran</div>
                    </th>
                    <th role="columnheader" scope="col" aria-colindex="5" class="">
                        <div>Status</div>
                    </th>
                    <th role="columnheader" scope="col" aria-colindex="6" class="">
                        <div>Pembayaran</div>
                    </th>
                </tr>
                </thead>
                <tbody role="rowgroup"><!---->

                @foreach ($products as $product)
                    @foreach($product->payments as $payment )
                        <tr role="row" class="bg-white font-small-2">

                            <td aria-colindex="2" role="cell" class="">
                                <span class="text-nowrap">{{$payment->id}}</span></td>
                            <td aria-colindex="3" role="cell" class="">
                                <a href="{{url('/product/detail?productId='.$product->id.'#modal-kwitansi')}}"> {{$product->tu_no}}</a>
                            </td>
                            <td aria-colindex="4" role="cell" class="">
                                <div class="progress" style="height: 7px;">
                                    <div role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50"
                                         class="progress-bar {{$payment->verify? "bg-success" : "bg-danger"}} progress-bar-striped" style="width: {{blank($product->total_price) ?0 : floor(($product->sum_amount/$product->total_price )*100)}}%;"></div>
                                </div>
                            </td>
                            <td aria-colindex="5" role="cell" class="">
                                    <span class="badge {{$payment->verify? "bg-success" : "bg-danger"}}  badge-pill"> {{$payment->verify? "verify" : "-"}}  </span>

                            </td>
                            <td aria-colindex="6" role="cell" class="">
                                {{'Rp. ' . number_format($payment->amount, 2, ',', '.')}}
                            </td>
                        </tr>
                    @endforeach
                @endforeach
                </tbody><!---->
            </table>
        </div>

        @if(!blank($paginate))
            <div class="mt-1 float-right">
                <nav>
                    <ul class="pagination">
                        <li class="page-item {{$paginate['prev'] ? '':'disabled'}}">
                            <a class="page-link" href="{{$paginate['prev'] ?? '#'}}" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        @foreach ($paginate['list_page'] as $list)
                            <li class="page-item {{$list['active'] ? 'active' : ''}} "><a class="page-link"
                                                                                          href="{{ $list['link'] }}">{{ $list['label'] }}</a>
                            </li>
                        @endforeach

                        <li class="page-item {{$paginate['next'] ? '' :'disabled'}}">
                            <a class="page-link" href="{{$paginate['next'] ?? '#'}}">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        @endif
    </div>

</div>
