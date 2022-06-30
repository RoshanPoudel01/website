<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Digital Health Nepal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ ucwords(auth()->user()->name) }}</a>
            </div>
        </div>

        {{-- <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->

                <li class="nav-item {{ request()->is('home*') ? 'menu-open' : "" }}">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->is('home*') ? 'active' : "" }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>




                <li class="nav-item {{ request()->is('menucategory*') ? 'menu-open' : "" }}">
                    <a href="#" class="nav-link {{ request()->is('menucategory*') ? 'active' : "" }}">
                        <i class="nav-icon fa fa-tasks"></i>
                        <p>
                            menucategory
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('menucategory.index') }}" class="nav-link {{ request()->is('menucategory') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('menucategory.create') }}" class="nav-link {{ request()->is('menucategory/create') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ request()->is('menusubcategory*') ? 'menu-open' : "" }}">
                    <a href="#" class="nav-link {{ request()->is('menusubcategory*') ? 'active' : "" }}">
                        <i class="nav-icon fa fa-tasks"></i>
                        <p>
                            menusubcategory
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('menusubcategory.index') }}" class="nav-link {{ request()->is('menusubcategory') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('menusubcategory.create') }}" class="nav-link {{ request()->is('menusubcategory/create') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>




                <li class="nav-item {{ request()->is('activity*') ? 'menu-open' : "" }}">
                    <a href="#" class="nav-link {{ request()->is('activity*') ? 'active' : "" }}">
                        <i class="nav-icon fa fa-tasks"></i>
                        <p>
                            Activity
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('activity.index') }}" class="nav-link {{ request()->is('activity') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('activity.create') }}" class="nav-link {{ request()->is('activity/create') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ request()->is('governance*') ? 'menu-open' : "" }}">
                    <a href="#" class="nav-link {{ request()->is('governance*') ? 'active' : "" }}">
                        <i class="nav-icon fa fa-tasks"></i>
                        <p>
                            Governance Tab
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('governance.index') }}" class="nav-link {{ request()->is('governance') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('governance.create') }}" class="nav-link {{ request()->is('governance/create') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ request()->is('homecontent*') ? 'menu-open' : "" }}">
                    <a href="#" class="nav-link {{ request()->is('homecontent*') ? 'active' : "" }}">
                        <i class="nav-icon fa fa-tasks"></i>
                        <p>
                            Home Tab
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('homecontent.index') }}" class="nav-link {{ request()->is('homecontent') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('homecontent.create') }}" class="nav-link {{ request()->is('homecontent/create') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ request()->is('digitalhealthmilestone*') ? 'menu-open' : "" }}">
                    <a href="#" class="nav-link {{ request()->is('digitalhealthmilestone*') ? 'active' : "" }}">
                        <i class="nav-icon fa fa-tasks"></i>
                        <p>
                            Digitalhealthmilestone Tab
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('digitalhealthmilestone.index') }}" class="nav-link {{ request()->is('digitalhealthmilestone') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('digitalhealthmilestone.create') }}" class="nav-link {{ request()->is('digitalhealthmilestone/create') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ request()->is('digitalhealthplatform*') ? 'menu-open' : "" }}">
                    <a href="#" class="nav-link {{ request()->is('digitalhealthplatform*') ? 'active' : "" }}">
                        <i class="nav-icon fa fa-tasks"></i>
                        <p>
                            Apps and Services Tab
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('digitalhealthplatform.index') }}" class="nav-link {{ request()->is('digitalhealthplatform') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('digitalhealthplatform.create') }}" class="nav-link {{ request()->is('digitalhealthplatform/create') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ request()->is('standardd*') ? 'menu-open' : "" }}">
                    <a href="#" class="nav-link {{ request()->is('standardd*') ? 'active' : "" }}">
                        <i class="nav-icon fa fa-tasks"></i>
                        <p>
                            Standardd Tab
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('standardd.index') }}" class="nav-link {{ request()->is('standardd') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('standardd.create') }}" class="nav-link {{ request()->is('standardd/create') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ request()->is('digitalmatrix*') ? 'menu-open' : "" }}">
                    <a href="#" class="nav-link {{ request()->is('digitalmatrix*') ? 'active' : "" }}">
                        <i class="nav-icon fa fa-tasks"></i>
                        <p>
                            Digitalmatrix Tab
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('digitalmatrix.index') }}" class="nav-link {{ request()->is('digitalmatrix') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('digitalmatrix.create') }}" class="nav-link {{ request()->is('digitalmatrix/create') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ request()->is('change*') ? 'menu-open' : "" }}">
                    <a href="#" class="nav-link {{ request()->is('change*') ? 'active' : "" }}">
                        <i class="nav-icon fa fa-tasks"></i>
                        <p>
                            Change Adoption Tab
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('change.index') }}" class="nav-link {{ request()->is('change') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('change.create') }}" class="nav-link {{ request()->is('change/create') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ request()->is('aihealth*') ? 'menu-open' : "" }}">
                    <a href="#" class="nav-link {{ request()->is('aihealth*') ? 'active' : "" }}">
                        <i class="nav-icon fa fa-tasks"></i>
                        <p>
                            AI in Health Tab
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('aihealth.index') }}" class="nav-link {{ request()->is('aihealth') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('aihealth.create') }}" class="nav-link {{ request()->is('aihealth/create') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ request()->is('implementation*') ? 'menu-open' : "" }}">
                    <a href="#" class="nav-link {{ request()->is('implementation*') ? 'active' : "" }}">
                        <i class="nav-icon fa fa-tasks"></i>
                        <p>
                            Implementation Tab
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('implementation.index') }}" class="nav-link {{ request()->is('implementation') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('implementation.create') }}" class="nav-link {{ request()->is('implementation/create') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ request()->is('infrastructure*') ? 'menu-open' : "" }}">
                    <a href="#" class="nav-link {{ request()->is('infrastructure*') ? 'active' : "" }}">
                        <i class="nav-icon fa fa-tasks"></i>
                        <p>
                            Infrastructure Tab
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('infrastructure.index') }}" class="nav-link {{ request()->is('infrastructure') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('infrastructure.create') }}" class="nav-link {{ request()->is('infrastructure/create') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                  <li class="nav-item {{ request()->is('user*') ? 'menu-open' : "" }}">
                    <a href="#" class="nav-link {{ request()->is('user*') ? 'active' : "" }}">
                        <i class="nav-icon fa fa-tags"></i>
                        <p>
                            User Details
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}" class="nav-link {{ request()->is('user') ? 'active' : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="/dashboard" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
