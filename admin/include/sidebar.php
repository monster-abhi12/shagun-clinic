<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <li >
                    <div class="text-white px-2 mt-3 bg-primary rounded-3 py-2" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">

                        Clients
                    </div>
                   
                    <div class="collapse pb-2 " id="collapseExample">
                        <p class="mt-3"><a href="add-client.php">Add Client</a></p>
                        <p><a href="manage-client.php">Manage  Client</a></p>
                    </div>
                </li>
                
                <li >
                    <div class="text-white px-2 mt-3 bg-primary rounded-3 py-2" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">

                        trending
                    </div>
                   
                    <div class="collapse pb-2 " id="collapseExample1">
                        <p class="mt-3"><a href="add-trending.php">Add trending</a></p>
                        <p><a href="manage-trending.php">Manage  trending</a></p>
                    </div>
                </li>

                <li >
                    <div class="text-white px-2 mt-3 bg-primary rounded-3 py-2" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">

                        product
                    </div>
                   
                    <div class="collapse pb-2 " id="collapseExample2">
                        <p class="mt-3"><a href="add-product.php">Add product</a></p>
                        <p><a href="manage-product.php">Manage  product</a></p>
                    </div>
                </li>
                
                

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>