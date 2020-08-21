@extends('Site.index')



@section('content')
    <div class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <table class="table   table-bordered shopping-cart-wrap">
                            <thead class="text-muted">
                            <tr>
                                <th scope="col" width="">Ürün Bilgileri</th>
                                <th scope="col" width="100">Fiyatı</th>
                                <th scope="col" width="120">Ürün <br/> Sayı</th>
                                <th scope="col" width="100">Toplam Fiyat</th>
                                <th scope="col" width="120" class="text-right"> x </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <table class="table table-sm font-sm mb-0 mt-2">
                                        <tbody>
                                        <tr>
                                            <th class="compress text-nowrap">Vinil </th>
                                            <td colspan="2"> Çin 280gr   </td>
                                        </tr>
                                        <tr>
                                            <th>Ölçüler</th>
                                            <td class="p-0">
                                                <table class="table table-sm mb-0 font-sm text-center">
                                                    <thead>
                                                    <tr>
                                                        <th>En</th>
                                                        <th>Boy</th>
                                                        <th>Alan</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-nowrap">300 cm</td>
                                                        <td class="text-nowrap">100 cm</td>
                                                        <td class="text-nowrap">

                                                            <span class="text-muted"><strong> 3 m<sup>2</sup></strong>   </span>
                                                        </td>

                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td ><strong class=" border-bottom border-dark">Ürün TL fiyatı</strong> </br><p>28.56 TL</p> </td>
                                        </tr>

                                        <tr>
                                            <th class="compress text-nowrap">Baskı</th>
                                            <td>İç Mekan Baskı (7.32 TL)</td>
                                            <td class="text-monospace text-right">21.96 TL</td>
                                        </tr>
                                        <tr>
                                            <th class="compress text-nowrap">Kopça</th>
                                            <td>Kopça ve Dikiş İstiyorum (0.00 TL)</td>
                                            <td class="text-monospace text-right">0.00 TL</td>
                                        </tr>
                                        <tr>
                                            <th class="compress text-nowrap">Kolon Dikişi</th>
                                            <td>Kolon Dikiş İstemiyorum (0.00 TL)</td>
                                            <td class="text-monospace text-right">0.00 TL</td>
                                        </tr>
                                        </tbody>

                                    </table>
                                   <span class=" text-monospace mt-1  text-sm-left">Ürün Sipariş Kodunuz  - PRVNL0021-CHN280</span>
                                </td>
                                <td > 23.54 <sup>₺</sup></td>
                                <td>
                                    <input type="number" name="" id="" value="1" class="form-control">
                                </td>
                                <td>
                                    <div class="price-wrap">
                                        <var class="price">₺ 145</var>
                                        <small class="text-muted">(USD5 each)</small>
                                    </div> <!-- price-wrap .// -->
                                </td>
                                <td class="text-right  " >
                                     <a href="" class="btn btn-sm btn-outline-danger"> × Sil</a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div> <!-- card.// -->
                </div>
            </div>
        </div>
    </div>

@endsection



@section('css')
    .param {
    margin-bottom: 7px;
    line-height: 1.4;
    }
    .param-inline dt {
    display: inline-block;
    }
    .param dt {
    margin: 0;
    margin-right: 7px;
    font-weight: 600;
    }
    .param-inline dd {
    vertical-align: baseline;
    display: inline-block;
    }

    .param dd {
    margin: 0;
    vertical-align: baseline;
    }

    .shopping-cart-wrap .price {
    color: #007bff;
    font-size: 18px;
    font-weight: bold;
    margin-right: 5px;
    display: block;
    }
    var {
    font-style: normal;
    }

    .media img {
    margin-right: 1rem;
    }
    .img-sm {
    width: 90px;
    max-height: 75px;
    object-fit: cover;
    }
@endsection

@section('js')
@endsection
