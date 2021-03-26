@extends('layouts.admin')
@section('title','Blog')

@section('breadcrumbs')

<div class="breadcrumbs">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
              <h1>Blog</h1>
          </div>
      </div>
  </div>
  <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li>
                    <a href="#">Blog</a>
                    <li class="active">Data</li>
                  </li>
              </ol>
          </div>
      </div>
  </div>
</div>
    
@endsection

@section('content')
<div class="content mt-3">
 
  <div class="animated fadeIn">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
      <div class="card-header">
        <div class="pull-left">
          <strong>Blog</strong>
        </div>
        <div class="pull-right">
          <a href="{{route('blog.create')}}" class="btn btn-success btn-sm">
            <i class="fa fa-plus"></i> Add
          </a>
        </div>
      </div>
      <div class="card-body table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Isi</th>
              <th>Image</th>
              <th>Action</th>
              
          </tr>
          </thead>
          <tbody>

            @foreach ($blogs as $blog)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$blog->title}}</td>
                  <td>{{$blog->body}}</td>
                  <td>
                    <img src="{{asset($blog->image)}}" alt="photo" width="50px" class=" ml-auto mr-auto mt-3">
                  </td>
                  <td class="justify-content-center">
                    <div class="btn-group " role="group" aria-label="Button Action">
                      <a href="{{route('blog.show',$blog->id)}}" type="button" class="btn btn-primary">Lihat</a>
                      <a href="{{route('blog.edit',$blog->id)}}" type="button" class="btn btn-secondary">Edit</a>
                      <form action="{{route('blog.delete',$blog->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" style="border-radius: 1" href="{{route('blog.delete',$blog->id)}}" onclick="return confirm('Yakin hapus data ?')">
                          Delete
                          </button>

                      </form>
                    </div>
                  </td>

                </tr>

            @endforeach


            {{-- @foreach ($edulevels as $item)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$item->name}}</td>
              <td>{{$item->desc}}</td>
              <td class="text-center">
                <a href="{{ url('edulevels/edit',$item->id) }}" class="btn btn-primary btn-sm">
                  <i class="fa fa-pencil">Edit</i>
                </a>
                <form action="{{ url('edulevels/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger btn-sm">
                    <i class="fa fa-trash">Delete</i>
                  </button>
                </form>
              </td>
            </tr>
            @endforeach --}}
            
          </tbody>
        </table>
      </div>
    </div>
      
  </div>

</div>
    
@endsection