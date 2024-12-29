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
    {{-- <div class="row">
        <div class="col-12">
            <div class="card style-datatable">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-server"></i> Products</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
