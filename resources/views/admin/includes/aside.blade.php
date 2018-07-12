<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Home </span>
                </a>
            </li>



            <li class="">
                <a href="{{url('/admin/person')}}">
                    <i class="fa fa-plane"></i> <span>Person </span>
                </a>
            </li>




        </ul>
    </section>
    <!-- /.sidebar -->
</aside>