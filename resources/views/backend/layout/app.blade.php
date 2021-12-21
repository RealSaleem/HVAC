<!DOCTYPE html>
<html lang="en">


@include('backend.partials.head')

<body>
    <div class="main-wrapper">
       
@include('backend.partials.top_nav')
@include('backend.partials.sidenav')


       @yield('content')
        
    </div>
    <div class="sidebar-overlay" data-reff=""></div>

	
</body>

@include('backend.partials.scripts')
<!-- add-employee24:07-->
</html>
