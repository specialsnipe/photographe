<!-- main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{route('admin.topic.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                       Темы
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.client.index')}}" class="nav-link">
                    <i class=" nav-icon fas fa-leaf"></i>
                    <p>
                       Клиенты
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.photo.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-fan"></i>
                    <p>
                       Фотографии
                    </p>
                </a>
            </li>


        </ul>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

