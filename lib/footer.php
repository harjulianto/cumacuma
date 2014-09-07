
    <div class="link-list-row">
        <div class="container no-padding">
            <div class="col-xs-12 col-md-4 ">
                <!-- ============================================================= CONTACT INFO ============================================================= -->
<div class="contact-info">
    <div class="footer-logo">
        <img src="
            <?php
                $query = mysql_query("select * from setting");
                while ($buff = mysql_fetch_array($query)) 
                { echo $buff['logo']; }
            ?>
        ">   
    </div><!-- /.footer-logo -->
    
    <p class="regular-bold"> Kontak Kami</p>
    
    <p>
        <?php
                $query = mysql_query("select * from setting");
                while ($buff = mysql_fetch_array($query)) 
                { echo $buff['alamat']; }
        ?>
    </p>
    <p>
            <?php
                $query = mysql_query("select * from setting");
                while ($buff = mysql_fetch_array($query)) 
                { echo $buff['telpon']; }
            ?>
    </p>
    
    <div class="social-icons">
        <h3>Temukan Kami</h3>
        <ul>
            <?php
                $query = mysql_query("select * from setting");
                while ($buff = mysql_fetch_array($query)) 
                { ?>
                    <li><a href="https://facebook.com/<?php echo $buff['fb']; ?>" target="_blank" class="fa fa-facebook"></a></li>
                    <li><a href="https://twitter.com/<?php echo $buff['twitter']; ?>" target="_blank" class="fa fa-twitter"></a></li>
            <?php
            }
            ?>
        </ul>
    </div><!-- /.social-icons -->

</div>
<!-- ============================================================= CONTACT INFO : END ============================================================= -->            </div>

            <div class="col-xs-12 col-md-8 no-margin">
                <!-- ============================================================= LINKS FOOTER ============================================================= -->
<div class="link-widget">
    <div class="widget">
        <h3>Kategori</h3>
        <ul>
            <?php
                $query = mysql_query("SELECT * from kategori ORDER BY nama_kategori ASC ");
                while ($buff = mysql_fetch_array($query)) 
                { 
                    echo '<li><a href="#">'.$buff['nama_kategori'].'</a></li>';
                }
            ?>
        </ul>
    </div><!-- /.widget -->
</div><!-- /.link-widget -->

<div class="link-widget">
    <div class="widget">
        <h3>Informasi</h3>
        <ul>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Kontak Kami</a></li>
            <li><a href="#">Gift Cards</a></li>
            <li><a href="#">Community</a></li>
            <li><a href="#">Careers</a></li>

        </ul>
    </div><!-- /.widget -->
</div><!-- /.link-widget -->

<div class="link-widget">
    <div class="widget">
        <h3>Informasi Saya</h3>
        <ul>
            <li><a href="#">Informasi Akun</a></li>
            <li><a href="#">Lacak Pengiriman</a></li>
            <li><a href="#">Customer Service</a></li>
            <li><a href="#">Pengembalian</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Product Support</a></li>
        </ul>
    </div><!-- /.widget -->
</div><!-- /.link-widget -->
<!-- ============================================================= LINKS FOOTER : END ============================================================= -->            </div>
        </div><!-- /.container -->
    </div><!-- /.link-list-row -->

    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-margin">
                <div class="copyright">
                    &copy; <?php
                                $query = mysql_query("select * from setting");
                                while ($buff = mysql_fetch_array($query)) 
                                { echo $buff['footer']; }
                            ?>
                </div><!-- /.copyright -->
            </div>
            <div class="col-xs-12 col-sm-6 no-margin">
                <div class="payment-methods ">
                    <ul>
                        <li><img alt="" src="assets/images/payments/payment-visa.png"></li>
                        <li><img alt="" src="assets/images/payments/payment-master.png"></li>
                        <li><img alt="" src="assets/images/payments/payment-paypal.png"></li>
                        <li><img alt="" src="assets/images/payments/payment-skrill.png"></li>
                    </ul>
                </div><!-- /.payment-methods -->
            </div>
        </div><!-- /.container -->
    </div><!-- /.copyright-bar -->
