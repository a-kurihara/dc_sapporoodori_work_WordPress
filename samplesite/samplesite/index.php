<?php get_header(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
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
<!-- <title>SAMPLE SITE</title> -->
 <link rel="stylesheet" href="<?php echo home_url(); ?>/style.css">
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
    <div id="slide">
        <ul class="slide-inner">
            <li></li>
            <li></li>
            <li></li>
        </ul>
         <div class="s-prev"><img src="<?php echo get_template_directory_uri(); ?>/images/nav_prev.png" alt="前へ"></div>
         <div class="s-next"><img src="<?php echo get_template_directory_uri(); ?>/images/nav_next.png" alt="次へ"></div>
         <div class="cont-nav"></div>
    </div>
    <div class="container">
        <div id="contents">
            <div class="top-nav">
                <div class="top-navColumn top-navColumn_left">
                    <h2>SERVICE</h2>
                    <div class="top-navPhoto"><a href="<?php echo home_url(); ?>/service/"><img src="<?php echo get_template_directory_uri(); ?>/images/photo02.jpg" alt="" width="460" /></a></div>
                    <p>弊社のサービスをご紹介します。</p>
                    <p class="top-navDetail"><a href="<?php echo home_url(); ?>/service/">MORE</a></p>
                </div>
                <div class="top-navColumn top-navColumn_right">
                    <h2>COMPANY</h2>
                    <div class="top-navPhoto"><a href="<?php echo home_url(); ?>/company/"><img src="<?php echo get_template_directory_uri(); ?>/images/photo03.jpg" alt=""  width="460" /></a></div>
                    <p>会社情報をご紹介します。</p>
                    <p class="top-navDetail"><a href="<?php echo home_url(); ?>/company/">MORE</a></p>
                </div>
            </div>
            <div id="cont_left">
                <div class="information">
                    <h2>INFORMATION</h2>
                    <dl>
                    <?php $infoPosts = get_posts('numberposts=4&category=4,5'); foreach($infoPosts as $post): ?> 
                        <dt><?php the_time('Y-m-d'); ?></dt>
                        <dd>
                        <span class="tab tag_<?php $cat = get_the_category(); $cat=$cat[0]; {echo $cat->$slug;} ?>">
                        <?php $cat = get_the_category(); $cat=$cat[0]; {echo $cat->$cat_name; }?></span>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を掲載しました。
                        </dd>

                        <?php endforeach; ?>
                    </dl>
                </div>


                <div class="information">
                    <h2>BLOG</h2>
                    <dl>
                    <?php $infoPosts = get_posts('numberposts=4&category=1'); foreach($infoPosts as $post): ?>
                        <dt><?php the_time('Y-m-d'); ?></dt>
                        <dd>
                        <div class="b_img">
                        <?php the_post_thumbnail('thumbside'); ?>
                        </div>
                         <div class="b_right">
                         <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                         </div></dd>

                         <?php endforeach; ?>
                    </dl>
                </div>
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