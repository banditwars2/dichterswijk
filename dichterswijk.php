
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bureau website</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script>    
    function initMap() {     
        var Dichterwijk = {lat: 52.084786, lng: 5.106878};
        var map = new google.maps.Map(document.getElementById('kaart'), {
          zoom: 15,
          center: Dichterwijk
        });
                    var marker = new google.maps.Marker({
              position: {lat: 52.08806853057501 , lng: 5.107032647143569},
              url: "index.php?p=nieuws&id=54",
              map: map
            });

            google.maps.event.addListener(marker, 'click', function() {
                window.location.href = marker.url;
            });
                    var marker = new google.maps.Marker({
              position: {lat: 52.0839811 , lng: 5.0999087000000145},
              url: "index.php?p=nieuws&id=53",
              map: map
            });

            google.maps.event.addListener(marker, 'click', function() {
                window.location.href = marker.url;
            });
              }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvqxC29Sg5bfCfL4sTPSszUe80-R_bHSo&callback=initMap">
    </script>
    <!-- <script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script> -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    </head>

<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">DICHTERSWIJK VERDICHT</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="active" role="presentation"><a href="#">OVER DEZE SITE</a></li>
                    <li role="presentation"><a href="#">AGENDA </a></li>
                    <li role="presentation"><a href="#">ARCHIEF </a></li>
                    <li role="presentation"><a href="#">LINKS </a></li>
                    <li role="presentation"><a href="nieuws.php">NIEUWS </a></li>
                    <li role="presentation"><a href="#">SOCIAL MEDIA</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="social-icons">
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
    </div>
    <div><div id="kaart">

<!--         <iframe style="z-index: 1;" allowfullscreen="" frameborder="0" width="86.4%" height="400" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDvqxC29Sg5bfCfL4sTPSszUe80-R_bHSo&amp;q=Dichterswijk%2C+Utrecht&amp;zoom=15"></iframe> --></div>
        <div id="legenda"><img class="img-responsive" src="assets/img/1383825_743595048990238_1785650720_n.jpg" width="13,6%" height="200">
        
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F030-dichterswijk&amp;tabs=timeline&amp;width=261&amp;height=500&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" style="order:none;width: 100%;overflow:hidden;min-width: 100%;" scrolling="no" frameborder="0" allowtransparency="true" height="500"></iframe>

<div style="width:100%;"><a class="twitter-timeline" href="https://twitter.com/twitterdev" data-height="500">Tweets by TwitterDev</a></div><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
<div id="newsfeed">
        <div class="news">
        <div class="picture"><img src="assets/img/dichterswijk_01.jpg"></div>
        <h1>De titel</h1>
        <p><p><span style="text-decoration: underline;"><em><strong>De inhoud.</strong></em></span></p></p>

        <g:plusone></g:plusone>

        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2F030Dichterswijk%2F%3Ffref%3Dts&width=450&layout=standard&action=like&show_faces=false&share=false&height=35&appId" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

        <a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="Dichterswijk-Verdicht">Tweet</a>
    </div>
        <div class="news">
        <div class="picture"><img src="assets/img/dichterswijk_01.jpg"></div>
        <h1>Dit is een redelijk lange titel geworden die een heleboel dingen doet</h1>
        <p><p>Test 1234567890</p></p>

        <g:plusone></g:plusone>

        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2F030Dichterswijk%2F%3Ffref%3Dts&width=450&layout=standard&action=like&show_faces=false&share=false&height=35&appId" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

        <a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="Dichterswijk-Verdicht">Tweet</a>
    </div>
    </div>

<div class="footer-dark">
        <footer>
            
        </footer>
    </div>

</body>

<footer id="footer" role="contentinfo">
<div id="contact">
    <h2>Contact</h2>
    <a href="#">www.utrecht.nl</a>
    <a href="#">www.dichterswijk-verdicht.nl</a>
</div>
<div id="sitemap">
    <h2>Sitemap</h2>
    <div id="left">
        <a href="#">Dichterswijk-verdicht</a>
    </div>
    <div id="right">
        <a href="#">Over deze site</a>
        <a href="#">Agenda</a>
        <a href="#">Archief</a>
        <a href="#">Links</a>
    </div>
</div>
<div id="colofon">
    <h2>Colofon</h2>
    <div id="left">
        <a href="#">Redactie Dichterswijk</a>
        <a href="#">Vormgeving</a>
        <a href="#">Realisatie</a>
    </div>
    <div id="right">
        <a href="#">Wijkbureau</a>
        <a href="#">Zwartlicht</a>
        <a href="#">GLU</a>
    </div>
</div>

</footer>
</html>

