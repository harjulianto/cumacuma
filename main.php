<?php 
    include "lib/header.php";
    include "setting/conf.php";
?>
<body>
	
	<div class="wrapper">
		<!-- ============================================================= TOP NAVIGATION ============================================================= -->
        <?php include "lib/top-nav.php" ?>
        <!-- ============================================================= TOP NAVIGATION : END ============================================================= -->		<!-- ============================================================= HEADER ============================================================= -->
<header>
	<div class="container no-padding">
		
		<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
			<!-- ============================================================= LOGO ============================================================= -->
<div class="logo">
	<a href="index.php">
		<img src="
            <?php
                $query = mysql_query("select * from setting");
                while ($buff = mysql_fetch_array($query)) 
                { echo $buff['logo']; }
            ?>
        ">
	</a>
</div><!-- /.logo -->
<!-- ============================================================= LOGO : END ============================================================= -->		</div><!-- /.logo-holder -->

		<div class="col-xs-12 col-sm-12 col-md-6 top-search-holder no-margin">
			<div class="contact-row">
    <div class="phone inline">
        <i class="fa fa-phone"></i>
            <?php
                $query = mysql_query("select * from setting");
                while ($buff = mysql_fetch_array($query)) 
                { echo $buff['telpon']; }
            ?>
    </div>
    <div class="contact inline">
        <i class="fa fa-envelope"></i>
        <span class="le-color">
            <?php
                $query = mysql_query("select * from setting");
                while ($buff = mysql_fetch_array($query)) 
                { echo $buff['email']; }
            ?>
        </span>
    </div>
</div><!-- /.contact-row -->
<!-- ============================================================= SEARCH AREA ============================================================= -->
<div class="search-area">
    <form>
        <div class="control-group">
            <input class="search-field" placeholder="Cari Barang ...." />

            <ul class="categories-filter animate-dropdown">
                <li class="dropdown">

                    <a class="dropdown-toggle"  data-toggle="dropdown" href="category-grid.html">all categories</a>

                    <ul class="dropdown-menu" role="menu" >
                        <?php
                            $query = "select * from kategori";
                            $hasil = mysql_query($query);
                            while ($qtabel = mysql_fetch_assoc($hasil))
                                {
                                    echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="main.php?hal=kategori&'.$qtabel['nama_kategori'].'">'.$qtabel['nama_kategori'].'</a></li>';
                                }
                        ?>
                    </ul>
                </li>
            </ul>

            <a class="search-button" href="#" ></a>    

        </div>
    </form>
</div><!-- /.search-area -->
<!-- ============================================================= SEARCH AREA : END ============================================================= -->		</div><!-- /.top-search-holder -->

		<div class="col-xs-12 col-sm-12 col-md-3 top-cart-row no-margin">
			<div class="top-cart-row-container">
            <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
            <?php include "pages/home/shopcart.php" ?>
            <!-- ============================================================= SHOPPING CART DROPDOWN : END ============================================================= -->		</div><!-- /.top-cart-row -->
	   </div><!-- /.container -->
</header>
<!-- ============================================================= HEADER : END ============================================================= -->		<div id="top-banner-and-menu">
	<div class="container">
		
		<div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
	       <?php include "pages/home/bar.php" ?>
    	</div><!-- /.sidemenu-holder -->

		<div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
            <?php include "pages/home/slider.php" ?>
		</div><!-- /.homebanner-holder -->

	</div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->
<?php include "pages/home/banner.php" ?>

<?php include "pages/home/dashboard.php" ?>
<?php include "pages/home/partner.php" ?>
<footer id="footer" class="color-bg">
    <?php include "lib/footer.php" ?>
</footer><!-- /#footer -->
<!-- ============================================================= FOOTER : END ============================================================= -->	</div><!-- /.wrapper -->
<?php include "lib/script.php" ?>

</body>
</html>