<div class="box box-radius box-body">
    <header class="mb-2">
        <i class="fa fa-cog fa-fw"></i>
        <b>设置</b>
    </header>
    <section>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link {{ active_class(if_route('users.edit')) }}" href="{{ route('users.edit',Auth::user()) }}"><i class="fa fa-newspaper mr-2"></i>个人信息</a>
            <a class="nav-link {{ active_class(if_route('users.edit_image')) }}" href="{{ route('users.edit_image',Auth::user()) }}"><i class="fa fa-image mr-2"></i>图像设置</a>
            <a class="nav-link {{ active_class(if_route('users.edit_notify')) }}" href="{{ route('users.edit_notify',Auth::user()) }}"><i class="fa fa-bell mr-2"></i>消息通知</a>
            <a class="nav-link {{ active_class(if_route('users.edit_social_binding')) }}" href="{{ route('users.edit_social_binding',Auth::user()) }}"><i class="fa fa-map-signs mr-2"></i>账户绑定</a>
            <a class="nav-link {{ active_class(if_route('users.edit_password')) }}" href="{{ route('users.edit_password',Auth::user()) }}"><i class="fa fa-lock mr-2"></i>密码修改</a>
        </div>
    </section>
</div>