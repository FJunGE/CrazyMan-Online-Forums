<div class="box box-radius box-body">
    <header class="mb-2">
        <i class="fa fa-cog fa-fw"></i>
        <b>设置</b>
    </header>
    <section>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link {{ active_class(if_route_param('active','info')) }}" href="{{ route('users.edit',['user'=>Auth::user(),'active'=>'info']) }}"><i class="fa fa-newspaper mr-2"></i>个人信息</a>
            <a class="nav-link {{ active_class(if_route_param('active','image')) }}" href="{{ route('users.edit',['user'=>Auth::user(),'active'=>'image']) }}"><i class="fa fa-image mr-2"></i>图像设置</a>
            <a class="nav-link {{ active_class(if_route_param('active','notify')) }}" href="{{ route('users.edit',['user'=>Auth::user(),'active'=>'notify']) }}"><i class="fa fa-bell mr-2"></i>消息通知</a>
            <a class="nav-link {{ active_class(if_route_param('active','social_binding')) }}" href="{{ route('users.edit',['user'=>Auth::user(),'active'=>'social_binding']) }}"><i class="fa fa-map-signs mr-2"></i>账户绑定</a>
            <a class="nav-link {{ active_class(if_route_param('active','password')) }}" href="{{ route('users.edit',['user'=>Auth::user(),'active'=>'password']) }}"><i class="fa fa-lock mr-2"></i>密码修改</a>
        </div>
    </section>
</div>