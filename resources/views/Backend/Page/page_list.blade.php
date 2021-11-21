@extends('Backend.layouts.master')
@section('title', 'Sözlesme Listesi')
@endsection
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
                                <small>Multikart Admin panel</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Sözleşmeler</li>
                            <li class="breadcrumb-item active">Sözleşme Listesi</li>
                        </ol>
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
                            <h5>Page Details</h5>
                        </div>
                        <div class="card-body">
                            <div id="batchDelete" class="category-table order-table"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>
@endsection
@section('js')

    <!-- Jsgrid js-->
    <script src="{{asset('Backend/assets/js/jsgrid/jsgrid.min.js')}}"></script>
    <script src="{{asset('Backend/assets/js/jsgrid/griddata-page-list.js')}}"></script>
    <script src="{{asset('Backend/assets/js/jsgrid/jsgrid-page-list.js')}}"></script>
@endsection
