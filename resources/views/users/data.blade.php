@extends('main')
@section('title', 'Anggota')
@section('breadcrumbs')
<div class="breadcrumbs">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
              <h1>Anggota</h1>
          </div>
      </div>
  </div>
  <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li>
                    <a href="#">Users</a>
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
          <strong>Data Users</strong>
        </div>
        <div class="pull-right">
          <a href="{{ url('users/add') }}" class="btn btn-success btn-sm">
            <i class="fa fa-plus"></i> Add
          </a>
        </div>
      </div>
      <div class="card-body table-responsive">
        <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenjang</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($anggota as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->jenjang }}</td>
                <td class="text-center">
                  <a href="{{ url('users/edit/'.$item->id) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-pencil"> Edit</i>
                  </a>
                  <form action="{{ url('users/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakun Hapus Data?')">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"> Delete</i>
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