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
        h2.title{
            font-size: 24px;
            color: #333;
            margin: 60px 0 40px;
            text-align: left;
        }
        .news_content{
            display: flex;
            justify-content: space-between;
        }
        img{
            width: 505px;
            height: 388px;
        }
        .news_content p{
            line-height: 24px;
            color: #666;
            width: 606px;
        }

        @media screen and (max-width: 1330px){
            .news_content{
                flex-direction: column;

            }
            img,.news_content p{
                 width: 100%;
            }
        }
        @media screen and (max-width: 768px){
            img{
                height: 260px;
            }
        }
    </style>
</head>
<body>
<?php get_header() ?>
<main>
    <div class="banner"></div>
    <section>
        <div class="w" style="margin-bottom: 100px">
            <h2 class="title"><?php echo get_post()->post_title; ?></h2>
            <div class="news_content">
                <img src="<?php echo get_field('image')["url"]; ?>" alt="">
                <p><?php echo get_post()->post_content; ?></p>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>
</body>
</html>
