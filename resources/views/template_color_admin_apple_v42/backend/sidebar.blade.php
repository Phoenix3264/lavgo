
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="{{ asset('/public/').'/'.$root }}/assets/img/user/user-13.jpg" alt="" />
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>
                            {{ $AUTH_NAME }} 
                        <small>                        
                            {{ $AUTH_ROLE }} 
                        </small>
                    </div>
                </a>
            </li>
            <!--
            <li>
                <ul class="nav nav-profile">
                    <li><a href="javascript:;"><i class="ion-ios-cog"></i> Settings</a></li>
                    <li><a href="javascript:;"><i class="ion-ios-share-alt"></i> Send Feedback</a></li>
                    <li><a href="javascript:;"><i class="ion-ios-help"></i> Helps</a></li>
                </ul>
            </li>
            -->
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>            
            {!!color_admin_apple_v42_sidebar($AUTH_ID,NULL,$id,NULL)!!}
            
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ion-ios-arrow-back"></i> <span>Collapse</span></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>