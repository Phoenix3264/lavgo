
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/img/user/user-13.jpg" alt="" />
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>
                        Sean Ngu
                        <small>Front end developer</small>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
                    <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
                    <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
                </ul>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">            
            @foreach($sidebar_data as $row)
                <li class="{{is_has_sub($row->has_sub)}} {{check_active($row->id,$id,'level_1')}} ">
                    @if($row->link == 'javascript:;')
                        <a href="{{$row->link}}">
                    @else                
                        <a href="{{url('/').'/'.$row->link}}">
                    @endif
                        @if($row->has_sub == 1)                     
                        <b class="caret"></b>
                        @endif
                        {!!id_check_col_dmha_6($row->dmha_2,'fa')!!}
                        {{$row->nama}} :
                        {{$row->id}} - 
                        {{$id}}
                    </a>

                    @if($row->has_sub == 1)
                        {!!sidebar_level_2($row->dmha_2,$row->id,$id)!!}
                    @endif
                </li>
            @endforeach
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>