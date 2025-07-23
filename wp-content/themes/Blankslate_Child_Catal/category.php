<?php
if(!json_decode(do_shortcode("[department]"))){
    include get_query_template('404');
}else{
    $list = json_decode(do_shortcode("[department]"));
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="<?php echo get_theme_file_uri("assets/css/base.css") ?>">
        <link rel="stylesheet" href="<?php echo get_theme_file_uri("assets/css/main.css") ?>">
        <style>
            .banner{
                height: 260px;
                background: url("<?php echo get_theme_file_uri("assets/image/background-homepage-heading.jpg") ?>");
                background-size: cover;
            }
        </style>
    </head>
    <body>
    <?php get_header() ?>
    <main>
        <div class="banner"></div>
        <section>
            <div class="w" style="margin-bottom: 100px">
                <div class="title">
                    <h2>News</h2>
                    <div class="line"></div>
                </div>
                <div class="news_content">
                    <?php
                    $cat_id = get_query_var("cat");
                    $count = get_category($cat_id)->count;
//                    获取当前分类所有文章
                    $posts = get_posts("category=$cat_id&numberposts=$count");
                    foreach ($posts as $item) {
                    ?>
                    <div class="news_card">
                        <h3><a href="<?php echo $item->guid; ?>" style="color: #333;"><?php echo $item->post_title; ?></a></h3>
                        <p>
                            <?php echo $item->post_content; ?>
                        </p>
                        <div class="card_bottom">
                            <span><?php echo $item->post_date; ?></span>
                            <a href="<?php echo $item->guid; ?>">more></a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>
    <?php get_footer() ?>
    </body>
    </html>

    <?php
}
?>
