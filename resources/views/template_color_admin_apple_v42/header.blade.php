<div id="header" class="header navbar-inverse">
    <div class="navbar-header">
        <a href="index.html" class="navbar-brand">
        <span class="navbar-logo m-r-5"> 
            <i class="fas fa-cloud"></i>
        </span>  
        <b>{!!dmha_8_is_it_dev_mode()!!}</b> Admin</a>
        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown navbar-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('/public/').'/'.$root }}/assets/img/user/user-13.jpg" alt="" /> 
                <span class="d-none d-md-inline">Adam Schwartz</span> <i class="fas fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{url('/')}}/logout" class="dropdown-item">Log Out</a>
            </div>
        </li>
    </ul>
</div>



