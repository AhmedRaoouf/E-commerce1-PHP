<?php
session_start();
require_once "admin/functions/connect.php";
?> 
<header class="header bg-white">
        <div class="container px-0 px-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0">
            <!-- SEARCH BAR -->
            
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" name="search" class="search form-control bg-light border-0 small " placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2" >
                    <div class="input-group-append">
                        <button class="btn btn-primary search-button" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
                <div class="liveseach"></div>
                
              </form>
              
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <!-- Link--><a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == "index.php" ? "active" : "";?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == "shop.php" ? "active" : "";?>" href="shop.php">Shop</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == "detail.php" ? "active" : "";?>" href="detail.php">Product detail</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle  id="pagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                  <div class="dropdown-menu mt-3" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="index.php">Homepage</a><a class="dropdown-item border-0 transition-link" href="shop.php">Category</a><a class="dropdown-item border-0 transition-link" href="detail.php">Product detail</a><a class="dropdown-item border-0 transition-link " href="cart.php">Shopping cart</a>
                  <a class="dropdown-item border-0 transition-link" href="wishList.php">Wish List</a><a class="dropdown-item border-0 transition-link" href="checkout.php">Checkout</a></div>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">               
                <li class="nav-item"><a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == "cart.php" ? "active" : "";?>" href="cart.php"> <i class="fas fa-dolly-flatbed mr-1 text-gray"></i>Cart<small class="text-gray">(<?php
                if (isset($_SESSION['user_id'])){
                $userId = $_SESSION['user_id'];
                $select = "SELECT * FROM cart WHERE user_id = '$userId' ";
                $query = $conn -> query($select);
                echo $query -> num_rows;
              }else{
                echo "0";
              }
                ?>)</small></a></li>
                <li class="nav-item"><a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == "wishList.php" ? "active" : "";?>" href="wishList.php"> <i class="far fa-heart mr-1"></i><small class="text-gray"> (<?php
                if (isset($_SESSION['user_id'])){
                 $select = "SELECT * FROM wishList WHERE user_id = '$userId' ";
                 $wishList = $conn -> query($select);
                 echo $wishList -> num_rows;
                }else{
                  echo "0";
                }
                ?>)
                </small></a></li>
                <?php
                
                ?>
                <li class="nav-item"><a class="nav-link" href="login.php"> <i class="fas fa-user-alt mr-1 text-gray"></i>
                <?php
                    if (isset($_SESSION['user_id'])){
                        $id = $_SESSION['user_id'];
                        $name = "SELECT Name FROM users WHERE id = '$id'";
                        $query = $conn -> query($name)  -> fetch_assoc();
                        echo $query['Name'] . " $id";
                    }else{
                      echo "Login";
                    }
                ?>
                </a></li>
                <li class="nav-item"><a class="nav-link" href="logoutUser.php">Logout</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </header>

