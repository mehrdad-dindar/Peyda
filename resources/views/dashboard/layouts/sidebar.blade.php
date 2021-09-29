<!-- Sidemenu Area -->
<div class="ecaps-sidemenu-area">
    <!-- Desktop Logo -->
    <div class="ecaps-logo">
        <a href="{{ route('index') }}">
            <img class="desktop-logo" src="{{ URL::asset('front/img/logo-white-1.png')}}" height="50">
            <img class="small-logo" src="{{ URL::asset('front/img/faveicon.png')}}">
        </a>
    </div>

    <!-- Side Nav -->
    <div class="ecaps-sidenav" id="ecapsSideNav">
        <!-- Side Menu Area -->
        <div class="side-menu-area">
            <!-- Sidebar Menu -->
            <nav>
                <ul class="sidebar-menu" data-widget="tree">
                    <li {{--class="active"--}}><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-view-dashboard"></i><span>داشبورد</span></a></li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span>فراگارانتی‌ها</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('dashboard') }}/warranties/create">ایجاد فراگارانتی جدید</a></li>
                            <li><a href="{{ route('dashboard') }}/warranties">همه فراگارانتی‌ها</a></li>
                            <li><a href="{{ route('waitingIndex') }}"><span>در انتظار تایید</span>@if(sizeof(\App\Http\Controllers\Controller::getWaitingWarranties())>0)<span class="badge badge-pill badge-danger" style="display: inline;width: max-content;flex: unset;">{{sizeof(\App\Http\Controllers\Controller::getWaitingWarranties())}}</span>@endif</a></li>
                            <li><a href="{{ route('dashboard') }}/warranties/use"><span>استفاده از فراگارانتی</span>@if(\App\Http\Controllers\Controller::getUsesWarraties()>0)<span class="badge badge-pill badge-danger" style="display: inline;width: max-content;flex: unset;">{{\App\Http\Controllers\Controller::getUsesWarraties()}}</span>@endif</a></li>
                            <li><a href="project-details.html">استعلام فراگارانتی</a></li>
                            <li><a href="calendar.html">انواع فراگارانتی‌ها</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span>فروشگاه</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span>محصولات</span> <i class="fa fa-angle-left"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ route('products.create') }}">ایجاد</a></li>
                                    <li><a href="{{ route('products.index') }}">همه</a></li>
                                </ul>
                                <ul>
                                    <li><a href="{{ route('categories.index') }}"><i class="zmdi zmdi-view-dashboard"></i><span>دسته بندی ها</span></a></li>
                                </ul>
                                <ul>
                                    <li><a href="{{ route('brands.index') }}"><i class="zmdi zmdi-view-dashboard"></i><span>برندها</span></a></li>
                                </ul>
                                <ul>
                                    <li class="treeview">
                                        <a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span>ویژگی ها</span> <i class="fa fa-angle-left"></i></a>
                                        <ul class="treeview-menu">
                                            <li><a href="{{ route('propertyGroups.index') }}">گروه ویژگی ها</a></li>
                                            <li><a href="{{ route('properties.index') }}">لیست ویژگی ها</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span>کاربران</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('dashboard') }}/users"> همه کاربران @if(\App\Http\Controllers\Controller::getNewUsersNum()>0) <span class="badge badge-pill badge-danger" style="display: inline;width: max-content;flex: unset;">{{\App\Http\Controllers\Controller::getNewUsersNum()}}</span> @endif</a></li>
                            <li><a href="#">ایجاد کاربر</a></li>
                            <li><a href="{{ route('profile') }}">پروفایل من</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="zmdi zmdi-settings"></i> <span>تنظیمات</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('dashboard')}}/settings/brand">گوشی ها</a></li>
                            <li><a href="{{ route('roles.index') }}">نقش ها</a></li>

                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span>ظاهری</span> <i class="fa fa-angle-left"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ route('panelViews') }}">پنل</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-view-dashboard"></i><span>اعلانات</span></a></li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="zmdi zmdi-check"></i> <span>پشتیبانی</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('adminTickets')}}">تیکت ها</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
