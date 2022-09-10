<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="index.html">
            <img src="\back\assets\images\logo.png" class="logo-icon" alt="logo icon">
            <h5 class="logo-text">Admin Panel</h5>
        </a>
    </div>
    <div class="user-details">
        <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
            <div class="avatar"><img class="mr-3 side-user-img" src="\back\assets\images\avatars\no-profile.jpg" alt="user avatar"></div>
            <div class="media-body">
                <h6 class="side-user-name">{{auth()->user()->name}}</h6>
            </div>
        </div>
        <div id="user-dropdown" class="collapse">
            <ul class="user-setting-menu">{{--
                <li><a href="javaScript:void();"><i class="icon-user"></i>  My Profile</a></li>
                <li><a href="javaScript:void();"><i class="icon-settings"></i> Setting</a></li>--}}
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout').submit();">
                        <i class="icon-power"></i> Logout</a></li>
                <form id="logout" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span><i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{route('front.index')}}"><i class="zmdi zmdi-long-arrow-right"></i> Main Index</a></li>
                <li><a href="{{route('admin.index')}}"><i class="zmdi zmdi-long-arrow-right"></i> Admin Index</a></li>
            </ul>
        </li>
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="zmdi zmdi-menu"></i> <span>Estates</span><i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{route('admin.indexEstate')}}"><i class="zmdi zmdi-long-arrow-right"></i> Estates Index</a></li>
                <li><a href="{{route('admin.createEstate')}}"><i class="zmdi zmdi-long-arrow-right"></i> Add Estate</a></li>
            </ul>
        </li>
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="zmdi zmdi-menu"></i> <span>Blogs</span><i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{route('admin.indexBlog')}}"><i class="zmdi zmdi-long-arrow-right"></i> Blogs Index</a></li>
                <li><a href="{{route('admin.createBlog')}}"><i class="zmdi zmdi-long-arrow-right"></i> Add Blog</a></li>
            </ul>
        </li>
    </ul>

</div>
<!--End sidebar-wrapper-->
