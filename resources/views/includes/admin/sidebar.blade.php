 <!-- Sidebar Menu -->
 <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
          <li class="nav-header">Навигация</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-solid fa-align-justify"></i>
              <p>
                Посты
                <span class="badge badge-info right">{{$posts->total()}}</span>
              </p>
            </a>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->