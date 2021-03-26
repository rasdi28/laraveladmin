@extends('layouts.admin')

@section('title','Show')
    
@section('breadcrumbs')
<div class="breadcrumbs">
     <div class="col-sm-4">
         <div class="page-header float-left">
             <div class="page-title">
                 <h1>show</h1>
             </div>
         </div>
     </div>
     <div class="col-sm-8">
         <div class="page-header float-right">
             <div class="page-title">
                 <ol class="breadcrumb text-right">
                     <li>
                         <a href="">Blogs</a>
                         <li class="active">show</li>
                     </li>
                 </ol>
             </div>
         </div>
     </div>
     
 </div>
@endsection

@section('content')

<div class="row">
     <!-- Area Chart -->
     <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <a href="{{ route('blog.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>

            <div class="card-body">
                <div class="card shadow">                          
                      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" style="height: 250px" src="{{asset($blog->image)}}" alt="First slide">
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="carousel-caption d-none d-md-block text-dark">
                         <h3 class="font-weight-bold">{{$blog->title}}</h3>
                         <p>{{$blog->body}}</p>
                     </div>                  
                    
                </div>
            </div>
        </div>
    </div>
    
@endsection