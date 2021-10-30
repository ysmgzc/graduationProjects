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
                            <h3>Mail Ayarları Güncelleme
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
            <form action="{{route('admin.site.mail.settings.update', $smtp_settings->id)}}" method="post">
                @csrf
                <div class="row product-adding">
                    <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Mail SMTP Ayarları</h5>
                                </div>
                                <div class="card-body">
                                    <div class="digital-add needs-validation">
                                        <div class="form-group">
                                            <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> SMTP Sunucusu</label>
                                            <input class="form-control" name="smtp_server_name" id="validationCustom01" type="text" required="" value="{{$smtp_settings->server_name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="validationCustomtitle" class="col-form-label pt-0"><span>*</span> SMTP Kullanıcı Adı</label>
                                            <input class="form-control" name="smtp_username" id="validationCustomtitle" type="text" required="" value="{{$smtp_settings->username}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="validationCustomtitle6" class="col-form-label pt-0"><span>*</span> SMTP Kullanıcı Şifresi</label>
                                            <input class="form-control" name="smtp_password" id="validationCustomtitle6" type="text" required="" value="{{$smtp_settings->password}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-xl-6">
                        <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                    <div class="digital-add needs-validation">
                                        <div class="form-group">
                                            <label for="validationCustomtitle3" class="col-form-label pt-0"><span>*</span> SMTP Güvenliği</label>
                                            <input class="form-control" name="smtp_encryption" id="validationCustomtitle3" type="text" required="" value="{{$smtp_settings->encryption}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="validationCustomtitle2" class="col-form-label pt-0"><span>*</span> SMTP Port</label>
                                            <input class="form-control" name="smtp_port" id="validationCustomtitle2" type="text" required="" value="{{$smtp_settings->port}}">
                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="product-buttons text-center">
                                                <button  class="btn btn-primary">Güncelle</button>
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
    <!--ckeditor js-->
    <script src="{{asset('Backend/assets/js/editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('Backend/assets/js/editor/ckeditor/styles.js')}}"></script>
    <script src="{{asset('Backend/assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{asset('Backend/assets/js/editor/ckeditor/ckeditor.custom.js')}}"></script>
@endsection
