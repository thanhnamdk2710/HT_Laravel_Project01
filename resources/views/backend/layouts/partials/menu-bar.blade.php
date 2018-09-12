<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="images/users/{{ Auth::user()->avatar }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->username }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{Request::is('admin') ? 'active' : ''}}">
                <a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('admin/books') ? 'active' : '' }}">
                <a href="{{ route('admin.books.index') }}"><i class="fa fa-book"></i> <span>Books</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/categories') ? 'active' : '' }}">
                <a href="{{ route('admin.categories.index') }}"><i class="fa fa-clipboard-list"></i> <span>Categories</span></a>
            </li>
            <li class="">
                <a href="#"><i class="fa fa-user-alt"></i> <span>Authors</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-users"></i> <span>Users</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-envelope"></i> <span>Feedback</span></a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
