<link rel="stylesheet" href="<?php echo get_theme_file_uri("assets/css/base.css") ?>">
<style>
    header{
        background: #fff;
        box-shadow: 0 0 12px rgba(0,0,0,.16);
        position: sticky;
        top: 0;
        height: 86px;
        z-index: 99;
    }
    .header{
        display: flex;
        justify-content: space-between;
        height: 100%;
        align-items: center;
    }
    .logo{
        width: 120px;
        height: 55px;
    }
    .nav{
        display: flex;
        align-items: center;
    }
    .nav li{
        padding: 0 20px;
    }
    .nav a{
        font-weight: bold;
        color: #3392E5;
    }
    .hid_nav{
        width: 36px;
        height: 30px;
        background: url("<?php echo get_theme_file_uri("assets/image/icon.png") ?>");
        background-size: cover;
        cursor: pointer;
    }
</style>
<header>
    <div class="header w">
        <img src="<?php echo get_theme_file_uri("assets/image/logo.png") ?>" alt="logo" class="logo">
        <nav>
            <ul class="nav">
                <li><a href="/6_CMS">homepage</a></li>
                <li><a href="/6_CMS/departments">departments</a></li>
                <li><a href="/6_CMS/category/news/">news</a></li>
                <li><a href="/6_CMS/about-us">about us</a></li>
                <li><a href="/6_CMS/my-reservation">my reservation</a></li>
            </ul>
        </nav>
        <div class="hid_nav"></div>
    </div>
</header>
<?php get_sidebar() ?>


<script>
    let hid_nav = document.querySelector(".hid_nav")
    let aside = document.querySelector(".aside")
    let aside_nav = document.querySelector(".aside_nav")
    hid_nav.addEventListener("click",()=>{
        aside.style.display = "block"
        setTimeout(()=>{
            aside_nav.style.transform = 'translateX(0)'
        },0)
    })
    aside.addEventListener("click",()=>{
        aside_nav.style.transform = 'translateX(300px)'
        setTimeout(()=>{
            aside.style.display = "none"
        },300)
    })
</script>

