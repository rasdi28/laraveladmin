<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')-MyBimbel</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('includes.admin.styles')

</head>
<body>
    
    {{-- Start left panel --}}

    @include('includes.admin.left-panel')
 
    <!-- /#left-panel -->
 
    <div id="right-panel" class="right-panel">
        {{-- Header --}}
        @include('includes.admin.header')
               <!-- end header -->
        @yield('breadcrumbs')
        @yield('content')
        
        
    </div>   
    
    @include('includes.admin.script')
</body>
</html>