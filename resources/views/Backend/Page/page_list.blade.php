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
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Sözleşme Başlığı</th>
                                    <th scope="col">Oluşturulma Tarihi</th>
                                    <th scope="col">Durum</th>
                                    <th scope="col">Ayarlar</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($agreement as $value)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{$value->title}}</td>
                                    <td>{{$value->created_at}}</td>
                                    <td>{{$value->status}}</td>
                                   <td>
                                       <button style="width: 15px !important;" type="button" class="btn btn-success"><i class="fas fa-pen"></i></button>
                                       <button style="width: 15px !important;" type="button" class="btn btn-success"><i class="fas fa-trash"></i></button>
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
