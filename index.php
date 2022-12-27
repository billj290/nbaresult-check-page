<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBA球員查詢表</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
">
    <link rel="stylesheet" href="style.css">
</head>
<!---bootstrap5 nav bar引用--->
<div class="container first">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark mt-2 rounded">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#hang-over">老周</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#twitter-timeline">Celtics twitter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#check-nba-result">NBA result check</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
    </div>
<!---bootstrap5 carousel引用--->
    <div class="row">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner mt-3">
                <div class="carousel-item active">
                    <a href="https://twitter.com/NBA?s=20&t=gD7q70rHDXOejqOlE38-Kg">
                        <img src="./77.jpg" class="d-block w-100" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block" style="text-align: left;">
                        <h2>PASSION It's about time</h2>
                        <p>amazing things happen</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="https://sportwei.com/index.php/category/everyday/">
                        <img src="./nba.jpg" class="d-block w-100" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block " style="text-align: left;">
                        <h2>運彩小偉</h2>
                        <p>that's my focus, follow me!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="https://www.sportslottery.com.tw/">
                        <img src="./wewee.jpg" class="d-block w-100" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block " style="text-align: left;">
                        <h5>贊助活動請進台灣運彩</h5>
                        <p>賠率差, 限制嚴, 高手請進</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!---bootstrap5 製作2欄 左欄twitter嵌入;右欄三個div *嵌入youtube *輸入日期查詢nba戰績 *udn的nba新聞--->
<div class="container mt-3 mb-3 ">
    <div class="row">
        <div class="col-12 col-md-6 content-block overflow-scroll mb-2">
            <div id="twitter-timeline">
                <a class="twitter-timeline" data-tweet-limit="2" href="https://twitter.com/celtics?ref_src=twsrc%5Etfw">Tweets by celtics</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        <div class="col-12 col-md-6 content-block">
            <div class="ratio ratio-4x3">
                <iframe id="hang-over" width="auto" height="auto" src="https://www.youtube.com/embed/s7zr7AaQ2xo?start=2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col mt-3">
                <form action="./header.php" method="GET" id="check-nba-result">
                    <b class="fs-3">查詢戰績</b>
                    <input type="text" name="nbatoday" class="w-50" style="border-radius: 5px;height: 40px;" placeholder="輸入日期範例:2022-12-15" onfocus="this.placeholder=''" onblur="this.placeholder='輸入日期範例:2022-12-15'">
                    <input type="submit" value="提出" class="btn btn-info  ">
                </form>
            </div>
            <div class="ratio ratio-4x3 mt-3">
                <iframe src="https://tw-nba.udn.com/nba/standings/" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>

<button type="button" id="BackTop" class="toTop-arrow"></button>
<!---引入JQuery 製作一鍵回到頂端功能--->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
    $(function() {
        $('#BackTop').click(function() {
            $('html,body').animate({
                scrollTop: 0
            }, 60);
        });
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('#BackTop').fadeIn(222);
            } else {
                $('#BackTop').stop().fadeOut(222);
            }
        }).scroll();
    });
</script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
">
</script>
</body>

</html>