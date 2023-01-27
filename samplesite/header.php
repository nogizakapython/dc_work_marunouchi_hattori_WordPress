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
<title>SAMPLE SITE</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1><a href="index.html"><img src="images/logo.png" alt="SAMPLE WEB SITE" /></a></h1>
            <div id="menu">
                <ul>
                    <li class="home"><a href="index.html">TOP</a></li>
                    <li><a href="company.html">会社概要</a></li>
                    <li><a href="service.html">サービス概要</a></li>
                    <li><a href="archive-news.html">プレスリリース</a></li>
                    <li><a href="archive-news.html">ブログ</a></li>
                    <li><a href="contact.html">お問い合わせ</a></li>
                </ul>
            </div>
        </div>
    </header>