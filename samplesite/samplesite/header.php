<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<script type="text/javascript">
$(function() {
    $('#slide').slideshow({
        autoSlide    : true,
        effect       : 'fade',
        type         : 'repeat',
        interval     : 2000,
        duration     : 500,
        imgHoverStop : true,
        navHoverStop : true
    });
});
</script>
<?php if ( is_home() || is_front_page() ) : ?>
    <title><?php bloginfo('name'); ?></title>
<?php else : ?>
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
<?php endif; ?>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="SAMPLE WEB SITE" /></a></h1>
            <div id="menu">
                <ul>
                <li class="home"><a href="<?php echo home_url(); ?>/">TOP</a></li>
        <?php wp_nav_menu( array(
        'theme_location'=>'place_global',
        'container' =>'',
        'menu_class' =>'',
        'items_wrap' => '%3$s',//<ul>を出力しない
        ));?>
                </ul>
            </div>
        </div>
    </header>
    <!-- <div id="slide"> -->
        <!-- <ul class="slide-inner"> -->
            <!-- <li></li> -->
            <!-- <li></li> -->
            <!-- <li></li> -->
        <!-- </ul> -->
         <!-- <div class="s-prev"><img src="images/nav_prev.png" alt="前へ"></div> -->
         <!-- <div class="s-next"><img src="images/nav_next.png" alt="次へ"></div> -->
         <!-- <div class="cont-nav"></div> -->
    <!-- </div> -->
    <!-- <div class="container"> -->
        <!-- <div id="contents"> -->
            <!-- <div class="top-nav"> -->
                <!-- <div class="top-navColumn top-navColumn_left"> -->
                    <!-- <h2>SERVICE</h2> -->
                    <!-- <div class="top-navPhoto"><a href="service.html"><img src="images/photo02.jpg" alt="" width="460" /></a></div> -->
                    <!-- <p>弊社のサービスをご紹介します。</p> -->
                    <!-- <p class="top-navDetail"><a href="service.html">MORE</a></p> -->
                <!-- </div> -->
                <!-- <div class="top-navColumn top-navColumn_right"> -->
                    <!-- <h2>COMPANY</h2> -->
                    <!-- <div class="top-navPhoto"><a href="company.html"><img src="images/photo03.jpg" alt=""  width="460" /></a></div> -->
                    <!-- <p>会社情報をご紹介します。</p> -->
                    <!-- <p class="top-navDetail"><a href="company.html">MORE</a></p> -->
                <!-- </div> -->
            <!-- </div> -->
            <!-- <div id="cont_left"> -->
                <!-- <div class="information"> -->
                    <!-- <h2>INFORMATION</h2> -->
                    <!-- <dl> -->
                        <!-- <dt>2020-08-01</dt> -->
                        <!-- <dd> -->
                        <!-- <span class="tab tag_gyoumu">お知らせ</span> -->
                        <!-- <a href="single.html">夏季休暇のお知らせを掲載しました</a></dd> -->
                        <!-- <dt>2020-07-29</dt> -->
                        <!-- <dd> -->
    					<!-- <span class="tab tag_release">プレスリリース</span> -->
                        <!-- <a href="sample.html">新サービスのお知らせを掲載しました</a></dd> -->
                        <!-- <dt>2020-07-23</dt> -->
                        <!-- <dd> -->
    					<!-- <span class="tab tag_gyoumu">お知らせ</span> -->
                        <!-- <a href="sample.html">雑誌掲載情報を掲載しました</a></dd> -->
                        <!-- <dt>2020-07-20</dt> -->
                        <!-- <dd> -->
                        <!-- <span class="tab tag_gyoumu">お知らせ</span> -->
                        <!-- <a href="sample.html">雑誌掲載情報を掲載しました</a></dd> -->
                    <!-- </dl> -->
                <!-- </div> -->


                <!-- <div class="information"> -->
                    <!-- <h2>BLOG</h2> -->
                    <!-- <dl> -->
                        <!-- <dt>2020-08-04</dt> -->
                        <!-- <dd> -->
                        <!-- <div class="b_img"> -->
    	                    <!-- <img src="images/sample.jpg"> -->
                        <!-- </div> -->
                         <!-- <div class="b_right"> -->
                        <!-- <a href="sample.html">社長通信</a> -->
                         <!-- </div></dd> -->

                        <!-- <dt>2020-08-02</dt> -->
                        <!-- <dd> -->
                        <!-- <div class="b_img"> -->
    	                    <!-- <img src="images/sample.jpg"> -->
                        <!-- </div> -->
                         <!-- <div class="b_right"> -->
                        <!-- <a href="sample.html">社員紹介</a> -->
                         <!-- </div></dd> -->

                        <!-- <dt>2020-08-01</dt> -->
                        <!-- <dd> -->
                        <!-- <div class="b_img"> -->
    	                    <!-- <img src="images/sample.jpg"> -->
                        <!-- </div> -->
                         <!-- <div class="b_right"> -->
                        <!-- <a href="sample.html">セミナー開催報告</a> -->
                         <!-- </div></dd> -->


                    <!-- </dl> -->
                <!-- </div> -->
            <!-- </div>        -->
            <!-- <div id="cont_right"> -->
                <!-- <div class="sub-menu"> -->
                    <!-- <h3>SERVICE</h3> -->
                    <!-- <h4>Web事業</h4> -->
                    <!-- <ul> -->
                        <!-- <li><a href="service.html#s1">ホームページ制作</a></li> -->
                        <!-- <li><a href="service.html#s2">エンジニア派遣</a></li> -->
                    <!-- </ul> -->
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- </div> -->
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
    <!-- <div id="pageTop"> -->
        <!-- <a href="#">PAGE TOP</a> -->
    <!-- </div> -->
</body>
</html>