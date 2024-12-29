@extends('admin.app.app')

@section('title')
    Posts
@endsection

@section('vendorCss')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/editors/summernote.css') }}">
@endsection

@section('pageCss')
@endsection

@section('pageHeading')
    @include('admin.app.page-heading', ['text' => 'Dashboard / Posts'])
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="la la-server"></i> Posts</h4>
                    <div class="float-right mt-1 mr-2">
                        <a href="{{ route('admin.posts.create') }}"><button type="button"
                                class="btn btn-primary">Add New Post</button></a>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Publish Date</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td><img width="50" class="img-thumbnail" src="{{ asset('dynamic-assets/posts/' . $item->image) }}"></td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->author }}</td>
                                        <td>{{ date('Y-m-d', strtotime($item->publish_date)) }}</td>
                                        <td>{{ Str::limit(strip_tags($item->description), 30) }}</td>
                                        <form id="id_{{$item->id}}" action="{{route('admin.posts.destroy',$item)}}" method="POST" style="display: none;">
                                            @csrf
                                            @method("DELETE")
                                        </form>
                                        <td>
                                            <a href="{{route('admin.posts.edit',$item)}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                            <button onclick="event.preventDefault(); if (confirm('Are you sure you want to delete?')) { document.getElementById('id_{{$item->id}}').submit(); }" type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!!$posts->links("pagination::bootstrap-5")!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
