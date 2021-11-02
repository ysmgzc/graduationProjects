@extends('Backend.layouts.master')
@section('content')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Profile
                                <small>Multikart Admin panel</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Settings</li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-details text-center">
                                <img src="{{asset('Backend/assets/images/dashboard/designer.jpg')}}" alt="" class="img-fluid img-90 rounded-circle blur-up lazyloaded">
                                <h5 class="f-w-600 mb-0">John deo</h5>
                                <span>johndeo@gmail.com</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card tab2-card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="top-profile-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><i data-feather="user" class="me-2"></i>Profil</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="settings" class="me-2"></i>Ayarlar</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="top-tabContent">
                                <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                    <h5 class="f-w-600">Profil</h5>
                                    <div class="table-responsive profile-table">
                                        <table class="table table-borderless">
                                            <tbody>
                                            <tr>
                                                <td>First Name:</td>
                                                <td>Johan</td>
                                            </tr>
                                            <tr>
                                                <td>Email:</td>
                                                <td>johndeo@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>Mobile Number:</td>
                                                <td>2124821463</td>
                                            </tr>
                                            <tr>
                                                <td>Kayıt Tarihi:</td>
                                                <td>Dec, 15 1993</td>
                                            </tr>
                                            <tr>
                                                <td>Güncelleme Tarihi:</td>
                                                <td>USA</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                                    <div class="account-setting">
                                        <h5 class="f-w-600">Ayarlar</h5>
                                        <div class="table-responsive profile-table">
                                            <form action="">

                                                <table class="table table-borderless">
                                                    <tbody>
                                                    <tr>
                                                        <td>Ad Soyad:</td>
                                                        <td><input type="text" class="form-control" style="border: none; width: 160px; height: 30px; background-color: #f8f8f9;" placeholder="Ad-Soyad"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email:</td>
                                                        <td><input type="email" class="form-control" style="border: none; width: 160px; height: 30px; background-color: #f8f8f9;" placeholder="Email Adresiniz"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mobile Number:</td>
                                                        <td><input type="text" class="form-control" style="border: none; width: 160px; height: 30px; background-color: #f8f8f9;" placeholder="Telefon Numaranız"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Şifre:</td>
                                                        <td><input type="password" class="form-control" style="border: none; width: 160px; height: 30px; background-color: #f8f8f9;" placeholder="Yeni Şifreniz"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="product-buttons text-center">
                                                                    <button class="btn btn-primary">Güncelle</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>

                                                </table>
                                            </form>
                                        </div>
                                        </div>
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

    <script src="{{asset('Backend/assets/js/bootstrap.bundle.min.js')}}"></script>

@endsection


