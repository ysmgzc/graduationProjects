@extends('Backend.layouts.master')
@section('title') İletişim Ayarları @endsection
@section('css')
<script  src="{{asset('Backend/assets/js/jquery-3.3.1.min.js')}}"> </script>
@endsection
@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>İletişim Ayarları
                                <small>Admin Yönetim Paneli</small>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card tab2-card">
                        <div class="card-header">
                            <h5> İletişim Bilgilerini Güncelle</h5>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active show" id="account-tab" data-bs-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true" data-original-title="" title="">Account</a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                    <form class="needs-validation user-add" novalidate="" action="{{route('admin.contact.settings.update', $contacts->id)}}" method="POST">
                                        @csrf
                                        <h4>Ayrıntılar</h4>
                                        <div class="form-group row">
                                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Facebook Linki</label>
                                            <div class="col-xl-8 col-md-7">
                                                <input class="form-control" id="validationCustom0" type="text" name="facebook" value="{{$contacts->facebook}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span> İnstagram Linki</label>
                                            <div class="col-xl-8 col-md-7">
                                                <input class="form-control" id="validationCustom1" type="text" name="instagram" value="{{$contacts->instagram}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Twitter Linki</label>
                                            <div class="col-xl-8 col-md-7">
                                                <input class="form-control" id="validationCustom2" type="text" name="twitter" value="{{$contacts->twitter}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="validationCustom3" class="col-xl-3 col-md-4"><span>*</span> Adres</label>
                                            <div class="col-xl-8 col-md-7">
                                                <input class="form-control" id="validationCustom3" type="text" name="address" value="{{$contacts->address}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="validationCustom4" class="col-xl-3 col-md-4"><span>*</span> İletişim Mail Adresi</label>
                                            <div class="col-xl-8 col-md-7">
                                                <input class="form-control" id="validationCustom4" type="email" name="contact_mail" value="{{$contacts->contact_mail}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone" class="col-xl-3 col-md-4"><span>*</span> İletişim Telefon Numarası</label>
                                            <div class="col-xl-8 col-md-7">
                                                <input class="form-control" id="phone" type="tel" maxlength="11" name="whatsapp" value="{{$contacts->whatsapp}}">
                                            </div>
                                        </div>
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-primary">Güncelle</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>

@endsection
@section('js')
    <script type="text/javascript">
        $("#phone").mask("(999) 999-9999");
    </script>
@endsection
