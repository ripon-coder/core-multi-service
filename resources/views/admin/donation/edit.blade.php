@extends('admin.app.app')

@section('title')
    Edit Donation
@endsection
@section('pageCss')
@endsection

@section('pageHeading')
    @include('admin.app.page-heading', ['text' => 'Dashboard / Donation / Edit Donation'])
@endsection

@section('content')
    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="horz-layout-basic">Edit Donation</h4>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <div class="card-text"></div>
                            <form class="form form-horizontal" id="sliderform" method="post"
                                action="{{ route('admin.donation-admin.update',$donation) }}" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
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
                                        <label class="col-md-3 label-control">Fund Title</label>
                                        <div class="col-md-9 mx-auto">
                                            <input readonly type="text" value="{{ $donation->fund->title }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Published</label>
                                        <div class="col-md-9 mx-auto">
                                            <select class="form-control" name="status">
                                                @foreach ($DonationEnum as $value)
                                                    <option @selected($value->value==$donation->status) value="{{$value}}">{{$value}}</option>
                                                @endforeach
                                            </select>
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