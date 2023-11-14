<div class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                <li class="open">
                    <a href="{{ route('dashboard') }}" class="active">
                        <span class="nav-icon uil uil-create-dashboard"></span>
                        <span class="menu-text">Dashboard</span>
                        {{-- <span class="toggle-icon"></span> --}}
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('user.index') }}">
                        <span class="nav-icon uil uil-user"></span>
                        <span class="menu-text">User</span>
                    </a>
                </li>

                <li class="">
                    <a href="{{ route('task.index') }}" class="">
                        <span class="nav-icon uil uil-clipboard-notes"></span>
                        <span class="menu-text">Task</span>
                        {{-- <span class="toggle-icon"></span> --}}
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
