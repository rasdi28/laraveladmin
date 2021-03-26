@extends('layouts.admin')
@section('title','Tambah')
@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>EDIT</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li>
                        <a href="">Blogs</a>
                        <li class="active">Edit</li>
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
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Blogs</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('blog.index')}}" class="btn btn-secondary btn-sm">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <form action="{{route('blog.update',$blogs->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="title" class="form-control-label">Title</label>
                                <input type="text" class="form-control" name="title" value="{{old('title') ? old('title'): $blogs->title }}">
                            </div>
                            <div class="form-group">
                                <label>Isi</label>
                                <textarea name="body" class="form-control @error('body') is-invalid @enderror">{{old('body') ? old('body') :$blogs->body}}</textarea>
                                @error('body')
                                <div class="invalid-feedback"> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image" class="form-control-label">Image</label>
                                <input type="file" name="image" accept="image/*" required class="form-control @error('type') is-invalid @enderror">
                                @error('image')
                                    <div class="text-muted">{{$message}}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
@endsection

