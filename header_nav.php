<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="<?= $site_url . 't/' . $logo ?>" style="width:200px" alt="#" />
</div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight"><?= $address ?></span> </li>
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:<?= $email ?>"><?= $email ?></a></span> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
          <div class="float-left">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="<?= $fb ?>" title="Facebook" target="_blank"></a>
                </li>
                <li><a class="fa fa-google-plus" href="<?= $google ?>" title="Google+" target="_blank"></a>
                </li>
                <li><a class="fa fa-instagram" href="<?= $insta ?>" title="Instagram" target="_blank"></a>
                </li>
                <li><a class="fa fa-whatsapp" href="//wa.me/<?= $whatsapp ?>" title="Whatsapp" target="_blank"></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="float-right">
            <div class="make_appo">
              <?php
              if (isset($_SESSION['user_username']) && isset($_SESSION['user_email_id']) && isset($_SESSION['user_status'])) {
              ?>
                <a class="btn white_btn" href="<?= $site_url ?>logout"><?= $_SESSION['user_username'] ?> | Log Out</a>
              <?php
              } else {
              ?>
                <a class="btn white_btn" href="<?= $site_url ?>login">Log In</a>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="<?= $site_url ?>"><img src="<?= $site_url . 't/' . $logo ?>" style="width:140px" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a class="<?= $page == 'index' ? 'active' : '' ?>" href="<?= $site_url ?>">Home</a></li>
                <li> <a class="<?= $page == 'aboutus' ? 'active' : '' ?>" href="<?= $site_url ?>aboutus">About Us</a></li>
                <li> <a class="<?= $page == 'category' || $page == 'products' ? 'active' : '' ?>" href="<?= $site_url ?>products">Products</a>
                  <ul>

                    <?php
                    $categoriesList = getSampleCategories();
                    foreach ($categoriesList as $categoryRow) {
                      echo '<li><a href="' . $site_url . $categoryRow['url'] . '/' . $categoryRow['id'] . '">' . htmlspecialchars($categoryRow['name']) . '</a></li>';
                    }
                    ?>
                  </ul>
                </li>
                <li> <a class="<?= $page == 'clients' ? 'active' : '' ?>" href="<?= $site_url ?>clients">Clients</a></li>
                <li> <a class="<?= $page == 'testimonials' ? 'active' : '' ?>" href="<?= $site_url ?>testimonials">Testimonials</a></li>
                <li> <a class="<?= $page == 'contact' ? 'active' : '' ?>" href="<?= $site_url ?>contact">Contact</a></li>


                <?php
                $cartCount = !empty($_SESSION['shopping_list']) ? count($_SESSION['shopping_list']) : 0;
                if (isset($_SESSION['user_username']) && isset($_SESSION['user_email_id']) && isset($_SESSION['user_status'])) {
                ?>
                  <li> <a class="<?= $page == 'account' ? 'active' : '' ?>" href="#">Account</a>
                    <ul>
                      <li><a href="<?= $site_url ?>order-history">Order History</a></li>
                      <li><a href="<?= $site_url ?>shopping-cart">Shopping Cart (<?= $cartCount ?>)</a></li>
                      <li><a href="<?= $site_url ?>profile">Profile</a></li>
                      <li><a href="<?= $site_url ?>logout">Logout</a></li>
                    </ul>
                  </li>
                <?php
                } else {
                ?>
                  <li> <a class="<?= $page == 'shopping-cart' ? 'active' : '' ?>" href="<?= $site_url ?>shopping-cart">Shopping Cart (<?= $cartCount ?>)</a></li>
                <?php
                }
                ?>

              </ul>
            </div>
            <div class="search_icon">
              <ul>
                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<!-- end header -->