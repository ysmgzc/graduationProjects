@extends('Backend.layouts.master')
@section('title')
    Ana Menü- Ana Kategori Düzenle
@endsection
@section('css')
@endsection
@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <div class="page-header-left">
                            <h3>Ana Menü Düzenle
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
                    <div class="card">
                        <div class="card-header">
                            <h5>Ana Menü Düzenle</h5>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" action="{{route('menu.update', $menu->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>Ana Menü Adı</label>
                                    <div class="col-md-8">
                                        <input class="form-control" id="validationCustom0" type="text" name="title" required="" value="{{$menu->title}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-md-4">Aktiflik Durumu</label>
                                    <div class="col-xl-9 col-md-8">
                                        <div class="">
                                            <input id="checkbox-primary-2" name="status" type="checkbox" @if($menu->status == 1) checked @endif data-original-title="" title="Aktiflik Durumu">
                                            <label for="checkbox-primary-2" > @if($menu->status == 1) Sözleşme Aktif @else Sözleşme Aktif Değil @endif </label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary d-block">Kaydet</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>
@endsection
@section('js')
@endsection
