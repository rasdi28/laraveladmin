@extends('layouts.admin')
@section('title','dashboard')

@section('breadcrumbs')

<div class="breadcrumbs">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
              <h1>Dashboard</h1>
          </div>
      </div>
  </div>
  <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li>
                    <a href="#">Dashboard</a>
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
  <h3>Dashboard</h3>
</div>

    
@endsection