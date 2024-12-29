@extends('admin.app.app')

@section('title')
Learning
@endsection
@section('vendorCss')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/editors/summernote.css') }}">
@endsection
@section('pageCss')
@endsection

@section('pageHeading')
    @include('admin.app.page-heading', ['text' => 'Dashboard / Learning / Update Learning'])
@endsection

@section('content')
    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="horz-layout-basic">Update Learning</h4>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <div class="card-text"></div>
                            <form class="form form-horizontal" id="sliderform" method="POST"
                                action="{{ route('admin.learning.update',$learning->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-body">
                                    @if (session()->has('error') || $errors->has('file'))
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput5"></label>
                                            <div class="col-md-9 mx-auto">
                                                <div class="alert alert-danger mb-2" role="alert">
                                                    <strong>Oh snap!</strong> {{ session()->get('error') }}
                                                    {{ $errors->first('file') }}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Title</label>
                                        <div class="col-md-9 mx-auto">
                                            <input required type="text" value="{{ $learning->title }}" class="form-control"
                                                name="title">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Description</label>
                                        <div class="col-md-9 mx-auto">
                                            <textarea required class="form-control summernote" name="description">{{ $learning->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Button Text</label>
                                        <div class="col-md-9 mx-auto">
                                            <input required type="text" value="{{ $learning->button_text }}" class="form-control"
                                                name="button_text">
                                        </div>
                                    </div>

                                </div>

                                <div class="form-actions">
                                    <a href="{{ url()->previous() }}">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="la la-angle-left"></i> Back
                                        </button>
                                    </a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('vendorJs')
    <script src="{{ asset('admin/app-assets/vendors/js/editors/summernote/summernote.js') }}"></script>
@endsection
