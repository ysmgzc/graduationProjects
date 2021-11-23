@extends('Backend.layouts.master')
@section('title') Sözleşme Oluştur @endsection
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
                            <h3>Sözleşme Düzenle
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
                    <h5>Sözleşme Düzenle</h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active show" id="general-tab" data-bs-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true" data-original-title="" title="">General</a></li>
                        <li class="nav-item"><a class="nav-link" id="seo-tabs" data-bs-toggle="tab" href="#seo" role="tab" aria-controls="seo" aria-selected="false" data-original-title="" title="">SEO</a></li>
                    </ul>

                    <form class="needs-validation" action="{{route('sozlesme.update', $page->id)}}" method="post" >
                        @csrf
                        @method('PUT')
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                <h4>Genel</h4>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4" ><span>*</span> Sözleşme Adı</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" id="validationCustom0" name="title" required type="text" value="{{$page->title}}">
                                    </div>
                                </div>
                                <div class="form-group row editor-label">
                                    <label class="col-xl-3 col-md-4"><span>*</span> Açıklaması</label>
                                    <div class="col-xl-8 col-md-7">
                                        <div class="editor-space">
                                            <textarea required name="content" rows="4" class="form-control">{{$page->content}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-md-4" >Durum</label>
                                    <div class="col-xl-8 col-md-7">
                                        <div class="">
                                            <input  name="status" id="checkbox-primary-2" @if($page->status == 1) checked @endif  type="checkbox" data-original-title="" title="Aktif">
                                            <label for="checkbox-primary-2" > @if($page->status == 1) Sözleşme Aktif @else Sözleşme Aktif Değil @endif </label>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tabs">
                                <h4>SEO</h4>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4">Meta Keywords</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" id="validationCustom2" type="text" name="keywords" required value="{{$page->keywords}}">
                                    </div>
                                </div>
                                <div class="form-group row editor-label">
                                    <label class="col-xl-3 col-md-4">Meta Description</label>
                                    <div class="col-xl-8 col-md-7">
                                        <textarea required name="description" rows="4" class="form-control">{{$page->description}}</textarea>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>
@endsection
@section('js')
    <!--ck editor-->
    <script src="{{asset('Backend/assets/js/editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('Backend/assets/js/editor/ckeditor/styles.js')}}"></script>
    <script src="{{asset('Backend/assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{asset('Backend/assets/js/editor/ckeditor/ckeditor.custom.js')}}"></script>
@endsection
