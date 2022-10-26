<?php get_header(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<!-- <title>SAMPLE SITE</title> -->
</head>
<body>
    <!-- <header> -->
        <!-- <div class="container"> -->
            <!-- <h1><a href="index.html"><img src="images/logo.png" alt="SAMPLE WEB SITE" /></a></h1> -->
            <!-- <div id="menu"> -->
                <!-- <ul> -->
                    <!-- <li class="home"><a href="index.html">TOP</a></li> -->
                    <!-- <li><a href="company.html">会社概要</a></li> -->
                    <!-- <li><a href="service.html">サービス概要</a></li> -->
                    <!-- <li><a href="archive-news.html">プレスリリース</a></li> -->
                    <!-- <li><a href="archive-news.html">ブログ</a></li> -->
                    <!-- <li><a href="contact.html">お問い合わせ</a></li> -->
                <!-- </ul> -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- </header> -->
    <div class="">
<?php if(function_exists('bcn_display'))
{
bcn_display();
}?>
</div>
    <div id="cont_first" class="container">
        <div id="contents">
            <div id="cont_left">
            <?php if(have_posts()): while(have_posts()): the_post();?>
   <h2><?php the_title(); ?></h2>
   <?php the_content(); ?>
<?php endwhile; endif; ?>
	        </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
    <!-- <footer> -->
        <!-- <ul> -->
            <!-- <li class="home"><a href="index.html">TOP</a></li> -->
            <!-- <li><a href="service.html">SERVICE</a></li> -->
            <!-- <li><a href="company.html">COMPANY</a></li> -->
            <!-- <li><a href="contact.html">CONTACT</a></li> -->
        <!-- </ul> -->
        <!-- <div id="footer"> -->
            <!-- <div class="copyright">Copyright &copy; 2020 SAMPLE SITE All Rights Reserved.</div> -->
        <!-- </div> -->
    <!-- </footer> -->
    <div id="pageTop">
        <a href="#">PAGE TOP</a>
    </div>
</body>
</html>
<?php get_footer(); ?>