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
                <div class="information">
                    <h2>Blog</h2>
                    <dl>
                        <dt>2020-08-04</dt>
                        <dd>
                            <div class="b_img"><img src="<?php echo get_template_directory_uri(); ?>/images/sample.jpg"></div>
                            <div class="b_right"><a href="<?php echo home_url(); ?>/sample/">社長通信</a></div>
                        </dd>
                        <dt>2020-08-02</dt>
                        <dd>
                            <div class="b_img"><img src="<?php echo get_template_directory_uri(); ?>/images/sample.jpg"></div>
                            <div class="b_right"><a href="<?php echo home_url(); ?>/sample/">社員紹介</a></div>
                        </dd>
                        <dt>2020-08-01</dt>
                        <dd>
                            <div class="b_img"><img src="<?php echo get_template_directory_uri(); ?>/images/sample.jpg"></div>
                            <div class="b_right"><a href="<?php echo home_url(); ?>/sample/">セミナー開催報告</a></div>
                        </dd>
                    </dl>
                </div>
                <div class="information">
                    <h2>INFORMATION</h2>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <dl>
                        <dt><?php the_time('Y-m-d'); ?></dt>
                        <dd>
                        <span class="tab tag_<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"> <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を掲載しました。
                        </dd>
                    </dl>
                    <?php endwhile; endif; ?>
                    <?php wp_pagenavi(); ?>
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