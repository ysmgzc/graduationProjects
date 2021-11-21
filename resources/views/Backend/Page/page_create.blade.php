@extends('')
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
                            <h3>Create Page
                                <small>Multikart Admin panel</small>
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
                    <h5>Add Page</h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active show" id="general-tab" data-bs-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true" data-original-title="" title="">General</a></li>
                        <li class="nav-item"><a class="nav-link" id="seo-tabs" data-bs-toggle="tab" href="#seo" role="tab" aria-controls="seo" aria-selected="false" data-original-title="" title="">SEO</a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                            <form class="needs-validation">
                                <h4>General</h4>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Name</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" id="validationCustom0" type="text">
                                    </div>
                                </div>
                                <div class="form-group row editor-label">
                                    <label class="col-xl-3 col-md-4"><span>*</span> Description</label>
                                    <div class="col-xl-8 col-md-7">
                                        <div class="editor-space">
                                            <textarea id="editor1" name="editor1" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-md-4">Status</label>
                                    <div class="col-xl-8 col-md-7">
                                        <div class="checkbox checkbox-primary ">
                                            <input id="checkbox-primary-2" type="checkbox" data-original-title="" title="">
                                            <label for="checkbox-primary-2">Enable the Page</label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tabs">
                            <form class="needs-validation">
                                <h4>SEO</h4>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4">Meta Title</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" id="validationCustom2" type="text" >
                                    </div>
                                </div>
                                <div class="form-group row editor-label">
                                    <label class="col-xl-3 col-md-4">Meta Description</label>
                                    <div class="col-xl-8 col-md-7">
                                        <textarea rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="pull-right">
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>
@endsection
@section('js')
    <!--ck editor-->
    <script src="../assets/js/editor/ckeditor/ckeditor.js"></script>
    <script src="../assets/js/editor/ckeditor/styles.js"></script>
    <script src="../assets/js/editor/ckeditor/adapters/jquery.js"></script>
    <script src="../assets/js/editor/ckeditor/ckeditor.custom.js"></script>
@endsection
