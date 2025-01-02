@extends('admin.app.app')

@section('title')
Cancelled Review
@endsection

@section('vendorCss')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/editors/summernote.css') }}">
@endsection

@section('pageCss')
@endsection

@section('pageHeading')
    @include('admin.app.page-heading', ['text' => 'Dashboard / Cancelled Review'])
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-server"></i> Cancelled Review</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col">Comment</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cancelled as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->fname.' '.$item->lname }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->rating }}</td>
                                        <td>{{ $item->comment }}</td>
                                        <form id="approve_id_{{$item->id}}" action="{{route('admin.approvedReviewSave',$item)}}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button onclick="document.getElementById('approve_id_{{$item->id}}').submit();" type="button" class="btn btn-success btn-sm">Approve</button>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!!$cancelled->links("pagination::bootstrap-5")!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
