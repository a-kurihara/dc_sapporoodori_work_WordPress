<?php get_header(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<title>SAMPLE SITE</title>
</head>
<body>
<div class="pan">
<?php if(function_exists('bcn_display'))
{
bcn_display();
}?>
</div>
    <div id="cont_first" class="container">
        <div id="contents">
            <div id="cont_left">
                <h2>会社概要</h2>
                <table>
    	            <tr>
    					<th>会社名</th>
    		            <td><?php the_field('company_name'); ?></td>
    	            </tr>
                    <tr>
                        <th>本社</th>
                        <td><?php the_field('main_office'); ?></td>
                        </td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td><?php the_field('established'); ?></td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td><?php the_field('money'); ?></td>
                    </tr>
                    <tr>
                        <th>従業員数</th>
                        <td><?php the_field('add_member'); ?></td>
                    </tr>
    	            <tr>
    					<th>電話番号</th>
                        <td><?php the_field('add_tel'); ?></td>
    	            </tr>
    	            <tr>
    					<th>代表者名</th>
    		            <td><?php the_field('rep_name'); ?></td>
    	            </tr>
                </table>
            </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
    <div id="pageTop">
        <a href="#">PAGE TOP</a>
    </div>
</body>
</html>
<?php get_footer(); ?>