<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item  <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '';?>">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

             <!-- Nav Item - Tables -->
             <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'tables.php' ? 'active' : '';?>">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Admins</span></a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : '';?>">
                <a class="nav-link" href="products.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Products</span></a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'messages.php' ? 'active' : '';?>">
                <a class="nav-link" href="messages.php">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Messages</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item <?php echo basename($_SERVER['PHP_SELF']) == "addAdmin.php" ? "active" : "";?>" href="addAdmin.php">Add Admins</a>
                        <a class="collapse-item <?php echo basename($_SERVER['PHP_SELF']) == "addProduct.php" ? "active" : "";?>" href="addProduct.php">Add Product</a>
                    </div>
                    
                </div>
            </li>       
            <!-- Divider -->
            <hr class="sidebar-divider">  
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            
        </ul>