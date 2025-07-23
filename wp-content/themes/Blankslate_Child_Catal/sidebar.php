<style>
    .aside{
        position: fixed;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,.4);
        z-index: 999;
        display: none;
    }
    .aside_nav{
        width: 300px;
        height: 100%;
        background: #308FB2;
        position: fixed;
        top: 0;
        right: 0;
        padding: 0 0 0 46px;
        transition: all .6s;
        box-sizing: border-box;
        transform: translateX(300px);
        z-index: 9999;
    }
    .search{
        height: 30px;
        width: 190px;
        background: #fff;
        line-height: 42px;
        padding-left: 24px;
        box-sizing: border-box;
        /*border-radius: 22px;*/
        margin: 50px 0 10px;
        border: none;
    }
    .search::placeholder{
        color: #999;
        font-size: 12px;
    }
    .hide_nav li{
        margin-bottom: 15px;
    }
    .hide_nav a{
        color: #fff;
    }
    .date{
        margin-bottom: 60px;
    }
</style>
<aside>
<div class="aside"></div>
<div class="aside_nav">
    <input type="text" class="search" placeholder="search...">
    <input type="date" class="date">
    <ul class="hide_nav">
        <li><a href="/6_CMS">homepage</a></li>
        <li><a href="/6_CMS/departments">departments</a></li>
        <li><a href="/6_CMS/category/news/">news</a></li>
        <li><a href="/6_CMS/about-us">about us</a></li>
        <li><a href="/6_CMS/my-reservation">my reservation</a></li>
    </ul>
</div>
</aside>
