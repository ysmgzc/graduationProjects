@extends('Backend.layouts.master')
@section('title', 'Site Ayarları')
@section('css')
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
@endsection
@section('content')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Site Ayarları Güncelleme
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
            <form method="post" enctype="multipart/form-data" action="{{route('admin.site.settings.update', $site_settings->id)}}">
                @csrf

                <div class="row product-adding">
                    <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Genel</h5>
                                </div>
                                <div class="card-body">
                                    <div class="digital-add needs-validation">
                                        <div class="form-group">
                                            <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Başlık</label>
                                            <input class="form-control" name="title" id="validationCustom01" type="text" required="" value="{{$site_settings->title}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="validationCustomtitle" class="col-form-label pt-0"><span>*</span> URL</label>
                                            <input class="form-control" name="url" id="validationCustomtitle" type="text" required="" value="{{$site_settings->url}}">
                                        </div>

                                        <div class="form-group">
                                            <label class="col-form-label"><span>*</span> Site Aktiflik Durumu</label>
                                            <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                <label class="d-block" for="edo-ani">
                                                    <input class="radio_animated" id="edo-ani" type="radio" value="1" name="statu" @if($site_settings->statu == 1) checked @endif>
                                                    Aktif
                                                </label>
                                                <label class="d-block" for="edo-ani1">
                                                    <input class="radio_animated" id="edo-ani1" type="radio" value="0" name="statu" @if($site_settings->statu == 0) checked @endif>
                                                    İnaktif
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label for="validationCustomtitle5" class="col-form-label pt-0">Site Favicon</label>
                                            <input class="form-control" name="favicon" id="validationCustomtitle5" type="file" >
                                        </div>
                                        <div class="form-group">

                                            <label for="validationCustomtitle6" class="col-form-label pt-0">Site Logo</label>
                                            <input class="form-control" name="logo" id="validationCustomtitle6" type="file" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-xl-6">
                        <div class="card">
                                <div class="card-header">
                                    <h5>Meta Data</h5>
                                </div>
                                <div class="card-body">
                                    <div class="digital-add needs-validation">
                                        <div class="form-group">
                                            <label for="validationCustom05" class="col-form-label pt-0"> Meta Keywords</label>
                                            <input  class="form-control" id="validationCustom05" type="text" required="" name="keywords" value="{{$site_settings->keywords}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Meta Açıklama</label>
                                            <textarea name="description" rows="4" cols="12">{{$site_settings->description}}</textarea>
                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="product-buttons text-center">
                                                <button class="btn btn-primary">Güncelle</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Container-fluid Ends-->

    </div>
@endsection
@section('js')
{{--    <script>--}}
{{--        let dataOne = $('#edo-ani');--}}
{{--        let dataTwo = $('#edo-ani1');--}}
{{--        dataOne.on('change', function(){--}}
{{--            if(dataOne.val() == 'on'){--}}
{{--                alert(1)--}}
{{--            }--}}

{{--        });--}}
{{--        dataTwo.on('change', function(){--}}
{{--            if(dataTwo.val() == 'on'){--}}
{{--                alert(1)--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}
    <!--ckeditor js-->
    <script src="{{asset('Backend/assets/js/editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('Backend/assets/js/editor/ckeditor/styles.js')}}"></script>
    <script src="{{asset('Backend/assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{asset('Backend/assets/js/editor/ckeditor/ckeditor.custom.js')}}"></script>
@endsection
