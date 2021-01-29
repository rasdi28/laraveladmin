@extends('main')
@section('title', 'EduLevels')
@section('breadcrumbs')
<div class="breadcrumbs">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
              <h1>Edulevels</h1>
          </div>
      </div>
  </div>
  <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li>
                    <a href="#">Edulevels</a>
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
          <strong>Data Jenjang</strong>
        </div>
        <div class="pull-right">
          <a href="/edulevels/add" class="btn btn-success btn-sm">
            <i class="fa fa-plus"></i> Add
          </a>
        </div>
      </div>
      <div class="card-body table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>description</th>
              <th></th>
              
          </tr>
          </thead>
          <tbody>
            @foreach ($edulevels as $item)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$item->name}}</td>
              <td>{{$item->desc}}</td>
              <td class="text-center">
                <a href="" class="btn btn-primary btn-sm">
                  <i class="fa fa-pencil">Edit</i>
                </a>
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
      
  </div>

</div>
    
@endsection