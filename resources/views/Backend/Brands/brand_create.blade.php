@extends('Backend.layouts.master')
@section('title') Marka Ekle
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
                            <h3>Marka Oluştur
                                <small>Site Yönetim Paneli</small>
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
                    <h5>Marka Ekle</h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active show" id="general-tab" data-bs-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true" data-original-title="" title="">Genel</a></li>
                        <li class="nav-item"><a class="nav-link" id="seo-tabs" data-bs-toggle="tab" href="#seo" role="tab" aria-controls="seo" aria-selected="false" data-original-title="" title="">SEO</a></li>
                    </ul>

                    <form class="needs-validation" action="{{route('marka.store')}}" method="POST">
                        @csrf
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                <h4>Genel</h4>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Marka Adı</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" id="validationCustom0" name="title" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tabs">
                                <h4>SEO</h4>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4">Meta Keywords</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" id="validationCustom2" type="text" name="keywords" required>
                                    </div>
                                </div>
                                <div class="form-group row editor-label">
                                    <label class="col-xl-3 col-md-4">Meta Description</label>
                                    <div class="col-xl-8 col-md-7">
                                        <textarea rows="4" class="form-control" required name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>
@endsection
@section('js')
@endsection
