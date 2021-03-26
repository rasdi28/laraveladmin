@extends('main')
@section('title', 'EduLevels')
@section('breadcrumbs')
<div class="breadcrumbs">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
              <h1>Edit</h1>
          </div>
      </div>
  </div>
  <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li>
                    <a href="#">Users</a>
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
          <strong>Edit Users</strong>
        </div>
        <div class="pull-right">
          <a href="/edulevels" class="btn btn-secondary btn-sm">
            <i class="fa fa-undo"></i> Back
          </a>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-4 offset-md-4">
            <form action="{{ url('users/'.$anggota->id) }}" method="post">
                @method('patch')
              @csrf
              <div class="form-group">
                <label >Name</label>
                <input type="text" name="name" value="{{ $anggota->name }}" class="form-control" autofocus required>
              </div>
              <div class="form-group">
                <label >Email</label>
                <input type="email" name="email" value="{{ $anggota->email }}" class="form-control" autofocus required>
              </div>
              <div class="form-group">
                <label >Jenjang</label>
                <input type="text" name="jenjang" value="{{ $anggota->jenjang }}" class="form-control" autofocus required>
              </div>
              
              <button type="submit" class="btn btn-success">Ubah</button>
            </form>
          </div>
        </div>
     
      </div>
    </div>
      
  </div>

</div>
    
@endsection