<div id="header" class="header navbar-default">
    <div class="navbar-header">
        <a href="{{url('/')}}/dashboard" class="navbar-brand">
            <img src="{{asset('/')}}/public/logo/logo_gabungan.png" alt="logo_gabungan" >
        </a>
        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    
    @if($agent->isDesktop() == 1)
    <ul class="navbar-nav navbar-right">
        <li class="dropdown navbar-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                
                <img src="{{asset('/')}}/public/logo/unnar_logo.jpg" alt="unnar_logo" >
                <span class="d-none d-md-inline">
                    {{ $AUTH_NAME }} 
                </span> 
                {!!dmha_5_id_check_col_icon(125,'fa')!!}
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{url('/')}}/logout" class="dropdown-item">Log Out</a>
            </div>
        </li>
    </ul>
    @endif
</div>



