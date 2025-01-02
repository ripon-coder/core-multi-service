@extends('admin.app.app')

@section('title')
Approved Review
@endsection

@section('vendorCss')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/editors/summernote.css') }}">
@endsection

@section('pageCss')
@endsection

@section('pageHeading')
    @include('admin.app.page-heading', ['text' => 'Dashboard / Approved Review'])
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-server"></i> Approved Review</h4>
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
                                @foreach ($approved as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->fname.' '.$item->lname }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->rating }}</td>
                                        <td>{{ $item->comment }}</td>
                                        <form id="cancel_id_{{$item->id}}" action="{{route('admin.cancelReviewSave',$item)}}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button onclick="document.getElementById('cancel_id_{{$item->id}}').submit();" type="button" class="btn btn-danger btn-sm">Cancel</button>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!!$approved->links("pagination::bootstrap-5")!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
