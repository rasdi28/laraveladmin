<aside id="left-panel" class="left-panel">
               <nav class="navbar navbar-expand-sm navbar-default">
                   <div class="navbar-header">
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                           <i class="fa fa-bars"></i>
                       </button>
                       <a class="navbar-brand" href="">F-Shaff</a>
                       <a class="navbar-brand hidden" href="">M</a>
                   </div>
        
                   <div id="main-menu" class="main-menu collapse navbar-collapse">
                       <ul class="nav navbar-nav">
                           <li>
                               <a href="{{route('dashboard.index')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard</a>
                           </li>
                           <li>
                               <a href="{{route('blog.index')}}"> <i class="menu-icon fa fa-puzzle-piece"></i>Blog</a>
                           </li>
                           <li>
                               <a href="{{route('alumni.index')}}"> <i class="menu-icon fa fa-puzzle-piece"></i>Alumni</a>
                           </li>
                           <li>
                               <a href="{{ url('users') }}"> <i class="menu-icon fa fa-users"></i>User </a>
                           </li>
                       </ul>
                   </div><!-- /.navbar-collapse -->
               </nav>

</aside>