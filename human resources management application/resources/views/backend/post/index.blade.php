@extends('layout')



@section('content')

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
  </ol>


  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> Post
      <a href="{{url('admin/post/create')}}" class="float-right btn btn-sm btn-dark">Add Post</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
          <th>#</th>
              <th>Title</th>
              <th>Thumbnail</th>
              <th>image</th>
              <th>Action</th>
          </thead>
          <tfoot>
          <tr>
              <th>#</th>
              <th>Title</th>
              <th>Thumbnail</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
          @foreach($data as $post)
              <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td><img src="{{ asset('imgs/thumb').'/'.$post->thumb }}" width="100" /></td>
                <td><img src="{{ asset('imgs/full').'/'.$post->image }}" width="100" /></td>
                <td>
                  <a class="btn btn-info btn-sm" href="{{url('admin/post/'.$post->id.'/edit')}}">Update</a>
                  <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm" href="{{url('admin/post/'.$post->id.'/delete')}}">Delete</a>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
    </div>
<!-- /.container-fluid -->
@endsection