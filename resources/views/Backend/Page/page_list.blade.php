@extends('Backend.layouts.master')
@section('title') Sözleşmeler @endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/jsgrid.css')}}">
@endsection
@section('content')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Sözleşme Listesi
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
                            <h5>Sözleşme Listesi</h5>
                        </div>
                        <div>
                            <a href="{{route('sozlesme.create')}}">EKLE</a></div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Sözleşme Başlığı</th>
                                    <th scope="col">Oluşturulma Tarihi</th>
                                    <th scope="col">Güncelleme Tarihi</th>
                                    <th scope="col">Durum</th>
                                    <th scope="col">Ayarlar</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($agreement as $value)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$value->title}}</td>
                                    <td>{{$value->created_at}}</td>
                                    <td>{{$value->updated_at}}</td>
                                    <td><button class="@if($value->status == 0)  btn-primary @else btn-success @endif  btn-sm"  disabled>@if($value->status == 0)  İnaktif @else Aktif @endif</button></td>
                                   <td >
                                       <a href="{{route('sozlesme.edit', base64_encode($value->id))}}" title="Düzenle" class="btn btn-sm"><i style="font-size: 10px; color: green;" class="fas fa-pen" ></i></a>
                                       <a href="{{route('sozlesme.destroy', $value->id)}}" title="Sil" class="btn btn-sm"><i class="fas fa-trash" style="font-size: 10px; color: red;"></i></a>
                                   </td>
                                </tr>
                                @endforeach
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
