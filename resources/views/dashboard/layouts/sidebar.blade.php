<!-- Sidemenu Area -->
<div class="ecaps-sidemenu-area">
    <!-- Desktop Logo -->
    <div class="ecaps-logo">
        <a href="{{ route('index') }}"><img class="desktop-logo" src="{{ URL::asset('admin/img/core-img/peydaAdminLogo.png')}}" alt="لوگوی دسک تاپ"> <img class="small-logo" src="admin/img/core-img/peydaSmallLogo.png" alt="آرم موبایل"></a>
    </div>

    <!-- Side Nav -->
    <div class="ecaps-sidenav" id="ecapsSideNav">
        <!-- Side Menu Area -->
        <div class="side-menu-area">
            <!-- Sidebar Menu -->
            <nav>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="active"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-view-dashboard"></i><span>داشبورد</span></a></li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span>بیمه نامه‌ها</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('dashboard') }}/warranties/create">ایجاد بیمه نامه جدید</a></li>
                            <li><a href="{{ route('dashboard') }}/warranties">بیمه نامه‌ها</a></li>
                            <li><a href="{{ route('dashboard') }}/warranties/use">استفاده از بیمه نامه</a></li>
                            <li><a href="project-details.html">استعلام بیمه نامه</a></li>
                            <li><a href="calendar.html">انواع بیمه نامه‌ها</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span>کاربران</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('dashboard') }}/users">همه کاربران</a></li>
                            <li><a href="#">ایجاد کاربر</a></li>
                            <li><a href="{{ route('profile') }}">پروفایل من</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="zmdi zmdi-settings"></i> <span>تنظیمات</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('dashboard')}}/settings/brand">گوشی ها</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
