<?php
require_once "admin/functions/connect.php";
if(isset($_GET['cat_id'])){
  $catId = $_GET['cat_id'];
  $selectAll = "SELECT * FROM products WHERE cat_id = '$catId' ";
  $query = $conn ->query($selectAll);
  $total = mysqli_num_rows($query);
}else{
  $selectAll = "SELECT * FROM products";
  $query = $conn ->query($selectAll);
  $total = mysqli_num_rows($query);
}
$count = 1;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boutique | Ecommerce bootstrap template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Lightbox-->
    <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">
    <!-- Range slider-->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <!-- Bootstrap select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- Owl Carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.theme.default.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page-holder">
      <!-- navbar-->
      <?php
        require_once "admin/includes/userNav.php"
      ?>
      <!--  Modal -->
        
      <div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-hidden="true">
      <?php
        if (isset($_GET['imgId'])){
          $imgId = $_GET['id'];
        $selectImg = "SELECT img FROM products WHERE id = '$id' ";
        $img = $conn -> query($selectImg);
        
        }
        
        ?>
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0">
                  <a class="product-view d-block h-100 bg-cover bg-center modal-img" style="background: url(img/product-5-alt-1.jpg)" href="" data-lightbox="productview" title="Red digital smartwatch"></a>
                
              
              </div>
                <div class="col-lg-6">
                  <button class="close p-4" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="p-5 my-md-4">
                    <ul class="list-inline mb-2">
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                    </ul>
                  <!-- Model -->
                    <h2 class="h4 modal-name"></h2>
                    <p class="text-muted modal-price">$</p>
                    <p class="text-small mb-4 modal-desc"></p>

                    <div class="row align-items-stretch mb-4">
                      <div class="col-sm-7 pr-sm-0">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                          <div class="quantity">
                            <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                            <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                            <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="cart.php">Add to cart</a></div>
                    </div><a class="btn btn-link text-dark p-0" href="#"><i class="far fa-heart mr-2"></i>Add to wish list</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Shop</h1>
              </div>
              <div class="col-lg-6 text-lg-right">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <div class="container p-0">
            <div class="row">
              <!-- SHOP SIDEBAR-->
              <div class="col-lg-3 order-2 order-lg-1">
                <h5 class="text-uppercase mb-4">Categories</h5>
                <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase font-weight-bold">Products</strong></div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">

                  <li class="mb-2"><a class="reset-anchor" href="shop.php">All</a></li>
                  <!-- Categories -->
                  <?php
                    
                    $select_cat = "SELECT * FROM category";
                    $query = $conn -> query($select_cat);
                    foreach ($query as $cat){
                  ?>
                  <li class="mb-2"><a class="reset-anchor" href="?cat_id=<?= $cat['id']?> "><?= $cat['Name']?></a></li>
                  <?php }?>
                </ul>

                <h6 class="text-uppercase mb-4">Price range</h6>
                <div class="price-range pt-4 mb-5">
                  <div id="range"></div>
                  <div class="row pt-2">
                    <div class="col-6"><strong class="small font-weight-bold text-uppercase">From</strong></div>
                    <div class="col-6 text-right"><strong class="small font-weight-bold text-uppercase">To</strong></div>
                  </div>
                </div>

                <div class="custom-control custom-checkbox mb-1">
                  <input class="custom-control-input" id="customCheck2" type="checkbox">
                  <label class="custom-control-label text-small" for="customCheck2">Returns Accepted</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                  <input class="custom-control-input" id="customCheck3" type="checkbox">
                  <label class="custom-control-label text-small" for="customCheck3">Completed Items</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                  <input class="custom-control-input" id="customCheck4" type="checkbox">
                  <label class="custom-control-label text-small" for="customCheck4">Sold Items</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                  <input class="custom-control-input" id="customCheck5" type="checkbox">
                  <label class="custom-control-label text-small" for="customCheck5">Deals &amp; Savings</label>
                </div>
                <div class="custom-control custom-checkbox mb-4">
                  <input class="custom-control-input" id="customCheck6" type="checkbox">
                  <label class="custom-control-label text-small" for="customCheck6">Authorized Seller</label>
                </div>
                <h6 class="text-uppercase mb-3">Buying format</h6>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" id="customRadio1" type="radio" name="customRadio">
                  <label class="custom-control-label text-small" for="customRadio1">All Listings</label>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" id="customRadio2" type="radio" name="customRadio">
                  <label class="custom-control-label text-small" for="customRadio2">Best Offer</label>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" id="customRadio3" type="radio" name="customRadio">
                  <label class="custom-control-label text-small" for="customRadio3">Auction</label>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" id="customRadio4" type="radio" name="customRadio">
                  <label class="custom-control-label text-small" for="customRadio4">Buy It Now</label>
                </div>
              </div>
              <!-- SHOP LISTING-->
              <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row mb-3 align-items-center">
                  <div class="col-lg-6 mb-2 mb-lg-0">
                    <p class="text-small text-muted mb-0">                    
                    <?php
                      if (isset($_GET['num'])){
                      echo "Showing " .  $_GET['num']*4 - 3 . " - " ;
                      echo $_GET['num']*4>$total?$total:$_GET['num']*4 ;
                      echo " of " . $total . " results" ;
                      }else{
                        $_GET['num'] = 1;
                        echo "Showing 1 - 4 of $total results";
                      }
                    ?>                  
                    </p>
                  </div>
                  <div class="col-lg-6">
                    <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                      <li class="list-inline-item text-muted mr-3"><a class="reset-anchor p-0" href="#"><i class="fas fa-th-large"></i></a></li>
                      <li class="list-inline-item text-muted mr-3"><a class="reset-anchor p-0" href="#"><i class="fas fa-th"></i></a></li>
                      <li class="list-inline-item">
                        <select class="selectpicker ml-auto" name="sorting" data-width="200" data-style="bs-select-form-control" data-title="Default sorting">
                          <option value="default">Default sorting</option>
                          <option value="popularity">Popularity</option>
                          <option value="low-high">Price: Low to High</option>
                          <option value="high-low">Price: High to Low</option>
                        </select>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <!-- PRODUCT-->

                  <?php
                  // print_r($_GET);
                    if(isset($_GET['num'])){
                      $n = ($_GET['num']-1)*4;
                    }else{
                      $n = 0;

                    }
                    if (isset($_GET['cat_id'])){
                      $id = $_GET['cat_id'];
                      $select = "SELECT * FROM products WHERE cat_id = '$id' LIMIT 4 OFFSET $n";
                    // }elseif(isset($_POST['search'])){                      
                    //   $search = $_POST['search'];
                    //   $select = "SELECT * FROM products WHERE Name LIKE '%$search%' ";
                    }
                    else{
                      $select = "SELECT * FROM products LIMIT 4 OFFSET $n";
                    }
                    $query = $conn -> query($select);
                    foreach ($query as $pro){
                  ?>
                  <div class="col-lg-6 col-sm-6" >
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white badge-"></div><a class="d-block" href="detail.php?id=<?=$pro['id'] ?>">
                        <?php
                                $allImg = $pro['img'];
                                $allImg = explode(",",$allImg);

                        ?>
                          <img class="img-fluid w-50" src="admin/new_images/<?=$allImg[0]?>"alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="admin/functions/userWishList.php?id=<?= $pro['id']?>"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0">
                              <a class="btn btn-sm btn-dark" href="admin/functions/userCart.php?id=<?= $pro['id']?>">Add to cart</a></li>
                            <li class="list-inline-item mr-0">
                              <a class="btn btn-sm btn-outline-dark modalData " href="#productView" data-toggle="modal" 
                              data-id="<?=$pro['id'] ?>"
                              data-name="<?=$pro['Name'] ?>"
                              data-price="<?=$pro['price'] ?>"
                              data-img = "<?=$allImg[0]?>"
                              data-desc = "<?=$pro['description']?>"
                             ><i class="fas fa-expand " 
                            
                             ></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="detail.php?id=<?=$pro['id'] ?>"><?=$pro['Name'] ?></a></h6>
                      <p class="small text-muted">$<?=$pro['price'] ?></p>
                    </div>
                  </div>
                  <?php }?>
                </div>
                <!-- PAGINATION-->
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center justify-content-lg-end">
                    <?php
                      if ($_GET['num']>1) {
                    ?>
                    <li class="page-item"><a class="page-link" href="<?php
                    if (isset($_GET['cat_id'])){
                      echo "?cat_id=".$_GET['cat_id']."&num=".$_GET['num']-1;                      
                   }else{
                      echo "?num=".$_GET['num']-1;
                   }
                    ?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <?php } ?>
                    <?php  
                      for($i=0;$i<($total/4);$i++){    
                    ?>
                    <li class="page-item "><a class="page-link" href=" <?php                   
                    if (isset($_GET['cat_id'])){
                       echo "?cat_id=".$_GET['cat_id']."&num=".$i+1;                      
                    }else{
                       echo "?num=".$i+1;
                    }?>">
                    <?=$count++?></a></li>
                    <?php }?>
                    <?php if($_GET['num']< ($total/4)){ 
                      
                      ?>
                    <li class="page-item"><a class="page-link" href="<?php
                    if (isset($_GET['cat_id'])){
                      echo "?cat_id=".$_GET['cat_id']."&num=".$_GET['num']+1;                      
                   }else{
                      echo "?num=".$_GET['num']+1;
                   }
                    ?>" 
                    aria-label="Next"><span aria-hidden="true">»</span></a></li>
                    <?php } ?>
                  </ul>
                </nav>
              </div>
              
            </div>
          </div>
        </section>
      </div>
      <footer class="bg-dark text-white">
        <div class="container py-4">
          <div class="row py-5">
            <div class="col-md-4 mb-3 mb-md-0">
              <h6 class="text-uppercase mb-3">Customer services</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#">Help &amp; Contact Us</a></li>
                <li><a class="footer-link" href="#">Returns &amp; Refunds</a></li>
                <li><a class="footer-link" href="#">Online Stores</a></li>
                <li><a class="footer-link" href="#">Terms &amp; Conditions</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
              <h6 class="text-uppercase mb-3">Company</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#">What We Do</a></li>
                <li><a class="footer-link" href="#">Available Services</a></li>
                <li><a class="footer-link" href="#">Latest Posts</a></li>
                <li><a class="footer-link" href="#">FAQs</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h6 class="text-uppercase mb-3">Social media</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#">Twitter</a></li>
                <li><a class="footer-link" href="#">Instagram</a></li>
                <li><a class="footer-link" href="#">Tumblr</a></li>
                <li><a class="footer-link" href="#">Pinterest</a></li>
              </ul>
            </div>
          </div>
          <div class="border-top pt-4" style="border-color: #1d1d1d !important">
            <div class="row">
              <div class="col-lg-6">
                <p class="small text-muted mb-0">&copy; 2020 All rights reserved.</p>
              </div>
              <div class="col-lg-6 text-lg-right">
                <p class="small text-muted mb-0">Template designed by <a class="text-white reset-anchor" href="https://bootstraptemple.com/p/bootstrap-ecommerce">Bootstrap Temple</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- JavaScript files-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/lightbox2/js/lightbox.min.js"></script>
      <script src="vendor/nouislider/nouislider.min.js"></script>
      <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
      <script src="vendor/owl.carousel2/owl.carousel.min.js"></script>
      <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
      <script src="js/front.js"></script>
      <!-- Nouislider Config-->
      <script>
        var range = document.getElementById('range');
        noUiSlider.create(range, {
            range: {
                'min': 0,
                'max': 2000
            },
            step: 5,
            start: [100, 1000],
            margin: 300,
            connect: true,
            direction: 'ltr',
            orientation: 'horizontal',
            behaviour: 'tap-drag',
            tooltips: true,
            format: {
              to: function ( value ) {
                return '$' + value;
              },
              from: function ( value ) {
                return value.replace('', '');
              }
            }
        });
        
      </script>
      <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {
        
            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
        
      </script>
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </div>

    <script src="js/ajax.js"></script>
    <!-- Live Search -->
    <script>
    $('.navbar-search').keyup(function (e) {
        e.preventDefault();
        var url = "admin/functions/userSearch.php",
            search =  $('.search').val();
            console.log($('.search').val());
        if (search != ''){
            $.post(url,{search},function(data){
                $(".liveseach").html(data);            
            });
        }else{
          $(".liveseach").html("");
        }    
    });
    </script>
  </body>
</html>