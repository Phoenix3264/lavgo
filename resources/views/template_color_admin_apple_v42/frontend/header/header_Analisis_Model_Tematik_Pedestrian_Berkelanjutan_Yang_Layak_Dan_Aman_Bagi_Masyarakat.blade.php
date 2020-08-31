
<div id="header" class="header navbar navbar-transparent navbar-fixed-top">
    <!-- begin container -->
    <div class="container">
        <!-- begin navbar-header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- end navbar-header -->
        <!-- begin navbar-collapse -->
        <div class="collapse navbar-collapse" id="header-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                <div class="form-group form-group-helper-header">
							
                    <select id="activitySelector" class="form-control form-control-select">
                            {!!dmha_344_show_option()!!}
                        </select>
                    </div>

                        
                </li>
                <li class="">

                
                    <a class="" href="{{url('/')}}/login" >
                            LOGIN
                    </a>
                </li>
            </ul>
        </div>
        <!-- end navbar-collapse -->
    </div>
    <!-- end container -->
</div>