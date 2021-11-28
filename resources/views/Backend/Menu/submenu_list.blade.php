@extends('Backend.layouts.master')
@section('title') Alt Menü Listesi @endsection
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
                            <h3>Alt Menü Listesi
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
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Alt Menü Listesi</h5>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Alt Menü Başlığı</th>
                                    <th scope="col">Oluşturulma Tarihi</th>
                                    <th scope="col">Güncelleme Tarihi</th>
                                    <th scope="col">Durum</th>
                                    <th scope="col">Ayarlar</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if(empty($menus))
                                    <div class="alert alert-danger" role="alert">
                                        Henüz menü-kategori içeriği yoktur.
                                    </div>
                                @else
                                    @foreach($submenus as $value)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{$value->title}}</td>
                                            <td>{{$value->created_at}}</td>
                                            <td>{{$value->updated_at}}</td>
                                            <td><button class="@if($value->status == 0)  btn-primary @else btn-success @endif  btn-sm"  disabled>@if($value->status == 0)  İnaktif @else Aktif @endif</button></td>
                                            <td >
                                                <a href="{{route('submenu.edit', base64_encode($value->id))}}" title="Düzenle" class="btn btn-sm"><i style="font-size: 10px; color: green;" class="fas fa-pen" ></i></a>
                                                <a href="{{route('submenu.destroy', $value->id)}}" title="Sil" class="btn btn-sm"><i class="fas fa-trash" style="font-size: 10px; color: red;"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif

                                </tbody>
                            </table>
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
