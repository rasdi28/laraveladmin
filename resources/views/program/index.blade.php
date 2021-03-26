@extends('main')
@section('title', 'EduLevels')
@section('breadcrumbs')
<div class="breadcrumbs">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
              <h1>Program</h1>
          </div>
      </div>
  </div>
  <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li>
                    <a href="#">Program</a>
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
          <a href="/programs/add" class="btn btn-success btn-sm">
            <i class="fa fa-plus"></i> Add
          </a>
        </div>
      </div>
      <div class="card-body table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Program</th>
              <th>Edulevels</th>
              <th>Info</th>
              <th>Info</th>
              <th></th>
              
          </tr>
          </thead>
          <tbody>
            @foreach ($programs as $item)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$item->name}}</td>
              <td>{{$item->edulevel_id}}</td>
              <td>{{$item->info}}</td>

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
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
      
  </div>

</div>
    
@endsection