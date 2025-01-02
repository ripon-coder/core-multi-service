@extends('admin.app.app')

@section('title')
    Dashborard
@endsection

@section('vendorCss')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection

@section('pageCss')
@endsection


@section('content')

    <h3>Dashboard</h3>
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card text-center d-flex justify-content-center align-items-center">
                <img src="{{ asset('dynamic-assets/logo/' . @$g_settings->logo) }}" width="50%" height="50%">
            </div>
        </div>
        
    </div>
@endsection
