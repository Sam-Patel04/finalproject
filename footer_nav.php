<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
                        <div class="navbar-search">
                            <form action="#" method="get" id="search-global-form" class="search-global">
                                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                                <div class="search-global__note">Begin typing your search above and press return to search.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Model search bar -->
<!-- footer -->
<footer class="footer_style_2">
    <div class="container-fuild">
        <div class="footer_blog">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="main-heading left_text">
                        <h2><?= $businessname ?></h2>
                    </div>
                    <p>Ajola is a company that specializes in the production of pouches, for Pesticides, Food ,spices and Seeds. The company has a strong commitment to quality and innovation, constantly improving their production processes to meet the evolving needs of their customers. With a focus on sustainability, ajola uses eco-friendly materials and employs ethical manufacturing practices to reduce their environmental impact. The company also offers customized solutions to meet the specific requirements of their clients, ensuring that they receive pouches that are both functional and aesthetically appealing. With their expertise and dedication to excellence, ajola has established itself as a leading producer of pouches in the industry

</p>
                    <ul class="social_icons">
                        <li class="social-icon gp"><a class="fa fa-facebook" href="<?= $fb ?>" title="Facebook" target="_blank"></a>
                        </li>
                        <li class="social-icon gp"><a class="fa fa-google-plus" href="<?= $google ?>" title="Google+" target="_blank"></a>
                        </li>
                        <li class="social-icon gp"><a class="fa fa-instagram" href="<?= $insta ?>" title="Instagram" target="_blank"></a>
                        </li>
                        <li class="social-icon gp"><a class="fa fa-whatsapp" href="//wa.me/<?= $whatsapp ?>" title="Whatsapp" target="_blank"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="main-heading left_text">
                        <h2>Additional links</h2>
                    </div>
                    <ul class="footer-menu">
                        <li> <a href="<?= $site_url ?>"><i class="fa fa-angle-right"></i> Home</a></li>
                        <li> <a href="<?= $site_url ?>aboutus"><i class="fa fa-angle-right"></i> About Us</a></li>
                        <li> <a href="<?= $site_url ?>products"><i class="fa fa-angle-right"></i> Products</a></li>
                        <li> <a href="<?= $site_url ?>clients"><i class="fa fa-angle-right"></i> Clients</a></li>
                        <li> <a href="<?= $site_url ?>testimonials"><i class="fa fa-angle-right"></i> Testimonials</a></li>
                        <li> <a href="<?= $site_url ?>contact"><i class="fa fa-angle-right"></i> Contact</a></li>
                        <li><a href="<?= $site_url ?>term-condition"><i class="fa fa-angle-right"></i> Terms and conditions</a></li>
                        <li><a href="<?= $site_url ?>privacy-policy"><i class="fa fa-angle-right"></i> Privacy policy</a></li>

                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="main-heading left_text">
                        <h2>Products</h2>
                    </div>
                    <ul class="footer-menu">
                        <?php
                        $categoryList = getSampleCategories();
                        foreach ($categoryList as $categoryRow) {
                            echo '<li><a href="' . $site_url . $categoryRow['url'] . '/' . $categoryRow['id'] . '"><i class="fa fa-angle-right"></i> ' . htmlspecialchars($categoryRow['name']) . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="main-heading left_text">
                        <h2>Contact us</h2>
                    </div>
                    <p><i class="fa fa-map-marker"></i> <?= $address ?><br>
                        <span style="font-size:18px;"><a href="mailto:<?= $email ?>"><i class="fa fa-envelope"></i> <?= $email ?></a></span>
                        <?= ($email1 != null ? '<br>
                        <span style="font-size:18px;"><a href="mailto:'.$email1.'"><i class="fa fa-envelope"></i> '.$email1.'</a></span>' : '') ?><br>
                        <span style="font-size:18px;"><a href="tel:<?= $mobile ?>"><i class="fa fa-phone"></i> <?= $mobile ?></a></span>
                        <?= ($mobile1 != null ? '<br>
                        <span style="font-size:18px;"><a href="tel:'.$mobile1.'"><i class="fa fa-phone"></i> '.$mobile1.'</a></span>' : '') ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="cprt">
            <p><?= $businessname ?> © Copyrights <?= date('Y') ?> Design by Saiyam</p>
        </div>
    </div>
</footer>
<!-- end footer -->