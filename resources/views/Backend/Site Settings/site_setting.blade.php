@extends('Backend.layouts.master')
@section('Site Ayarları')
@endsection
@section('css')
@endsection
@section('content')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Site Ayarları
                                <small>Yönetim Paneli</small>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="card tab2-card">
                <div class="card-header">
                    <h5>Site Ayarları Detay</h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active show" id="general-tab" data-bs-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true" data-original-title="" title="">General</a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                            <form class="needs-validation" novalidate="">
                                <h4>General</h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Site Adı</label>
                                            <div class="col-md-7">
                                                <input class="form-control" name="title" id="validationCustom0" type="text" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span>Site URL</label>
                                            <div class="col-md-7">
                                                <input class="form-control" name="url" id="validationCustom1" type="text" required="" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-md-4">Site Description</label>
                                            <div class="col-md-7">
                                                <input class=" form-control" name="description" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-md-4">Site Keywords</label>
                                            <div class="col-md-7">
                                                <input class="form-control " type="text" name="keywords">
                                                <label for="keywords"><small>Allow Free Shipping</small></label>
                                            </div>
                                            <div class="valid-feedback">Kelimeleri , ile ayırınız</div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-md-4">Site Yazarı</label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" required="" name="author">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-md-4">Site Durumu</label>
                                            <div class="col-md-7">
                                                <select class="custom-select w-100 form-control" required="">
                                                    <option value="">--Seçim Yapınız--</option>
                                                    <option value="1">Aktif</option>
                                                    <option value="2">İnaktif</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="pull-right">
                        <button type="button" class="btn btn-primary">Güncelle</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>
@endsection
@section('js')
@endsection
