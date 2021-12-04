@extends('Backend.layouts.master')
@section('title') Ürün Ekle @endsection
@section('css')
    <!-- Dropzone css-->
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/dropzone.css')}}">
@endsection
@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Ürün Ekle
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
            <div class="row product-adding">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Genel</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <div class="form-group">
                                    <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Ürün Adı</label>
                                    <input class="form-control" id="title" name="title" type="text" required="" >
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label"><span>*</span> Marka</label>
                                    <select class="custom-select form-control" required="">
                                        <option value="">--Belirtilmemiş--</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="validationCustom02" class="col-form-label"><span>*</span> Ürün Fiyatı</label>
                                    <input class="form-control" id="validationCustom02" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label"><span>*</span> Durum</label>
                                    <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                        <label class="d-block" for="edo-ani">
                                            <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani">
                                            Enable
                                        </label>
                                        <label class="d-block" for="edo-ani1">
                                            <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani">
                                            Disable
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label pt-0"> Ürün Fotoğrafları</label>
                                    <div class="box-input-file"><input class="upload" type="file" multiple><i class="fa fa-plus"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Ürün Hakkında</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <div class="form-group mb-0">
                                    <div class="description-sm">
                                        <textarea id="editor1" name="editor1" cols="10" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Meta Data</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0"> Meta Keywords</label>
                                    <input class="form-control" id="validationCustom05" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Meta Description</label>
                                    <textarea rows="4" cols="12"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="product-buttons text-center">
                                        <button type="button" class="btn btn-primary">Add</button>
                                        <button type="button" class="btn btn-light">Discard</button>
                                    </div>
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
    <!--dropzone js-->
    <script src="{{(asset('Backend/assets/js/dropzone/dropzone.js'))}}"></script>
    <script src="{{(asset('Backend/assets/js/dropzone/dropzone-script.js'))}}"></script>
    <script>
        $(document).read(function () {

        });
    </script>
@endsection
