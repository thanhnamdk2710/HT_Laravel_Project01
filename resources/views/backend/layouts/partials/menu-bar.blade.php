<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('bower_components/admin-lte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
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
            <li class="{{Request::is('admin/home') ? 'active' : ''}}">
                <a href="{{ route('home.index') }}"><i class="fas fa-home"></i><span>Home</span></a>
            </li>
            <li class="{{Request::is('admin/books') ? 'active' : ''}}">
                <a href="{{ route('books.show') }}"><i class="fas fa-book"></i><span>Books</span>
                </a>
            </li>
            <li class="#">
                <a href="#"><i class="fas fa-clipboard-list"></i><span>Categories</span></a>
            </li>
            <li class="">
                <a href="#"><i class="fas fa-user-alt"></i><span>Authors</span></a>
            </li>
            <li>
                <a href="#"><i class="fas fa-users"></i> <span>Users</span></a>
            </li>
            <li>
                <a href="#"><i class="far fa-envelope"></i> <span>Feedback</span></a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
