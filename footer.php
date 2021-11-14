<footer id="footer">
    <div id="footer-widgets" class="text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 padding-right-0">
                    <div class="cbr-spacer clearfix" data-desktop="5" data-mobi="0" data-smobi="0"></div>

                    <div class="widget widget_text">
                        <div class="textwidget">
                            <h1 style="color:#fff">Blog Channel-DuyTuan98</h1>
                            <p class="desc">Nơi chia sẽ kiến thức về lập trình Web , tương lai mong muốn trở thành một Fullstack Web Developer.</p>
                            <div class="socials clearfix">
                                <a href="" class="active"><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-skype"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div><!-- .widget_text -->
                </div><!-- .col-lg-3 -->

                <div class="col-lg-3 col-md-4">
                    <div class="widget widget_links padding-left-90">
                        <h2 class="widget-title"><span>Tài khoản</span></h2>

                        <ul>
                            <li class="cat-item"><a href="#">Thông tin của tôi</a></li>
                            <li class="cat-item"><a href="#">Tài khoản của tôi</a></li>
                            <li class="cat-item"><a href="#">Danh sách của tôi</a></li>
                            <li class="cat-item"><a href="#">Yêu thích</a></li>
                            <li class="cat-item"><a href="#">Giỏ hàng</a></li>
                        </ul>
                    </div>
                </div><!-- .col-lg-3 -->

                <div class="col-lg-3 col-md-4">
                    <div class="widget widget_links padding-left-60">
                        <h2 class="widget-title"><span>Thể loại</span></h2>

                        <ul>
                            <li class="cat-item"><a href="#">Hóa học</a></li>
                            <li class="cat-item"><a href="#">Toán học</a></li>
                            <li class="cat-item"><a href="#">Tin học</a></li>
                            <li class="cat-item"><a href="#">Lịch sử</a></li>
                            <li class="cat-item"><a href="#">Nghiên cứu</a></li>
                        </ul>
                    </div>
                </div><!-- .col-lg-3 -->

                <div class="col-lg-3 col-md-4">
                    <div class="widget widget_information">
                        <h2 class="widget-title"><span>Liên hệ</span></h2>

                        <ul>
                            <li class="clearfix">
                                <div class="inner">
                                    <span class="address">Bình Phuc, Thăng Bình, Quảng Nam.</span>
                                </div>
                            </li>

                            <li class="clearfix">
                                <div class="inner">
                                    <span class="phone">038 575 4567</span>
                                </div>
                            </li>

                            <li class="clearfix">
                                <div class="innerinner">
                                    <span class="email">duytuan.it.k40b@gmail.com</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!-- .col-lg-3 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- #footer-widgets -->
</footer><!-- #footer -->

<div id="bottom" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="bottom-bar-inner" class="clearfix">
                    <div class="bottom-bar-content">
                        <div id="copyright">
                            Copyright © 2021 <span>Duy Tuấn</span> - Blog Channel.
                        </div><!-- #copyright -->
                    </div>
                </div>
            </div><!-- .col-md-12 -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- #bottom -->
</div><!-- #page -->
</div><!-- #wrapper -->

<a id="scroll-top"></a>

<!--  Javascript -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/animsition.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/countto.js"></script>
<script src="assets/js/cubeportfolio.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/shortcodes.js"></script>
<script src="assets/js/equalize.min.js"></script>

<script>
    
       function object() {
        if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xmlhttp;
}
http = object();
function livesearch(data) {
    if (data != "") {
        http.onreadystatechange = process;
        http.open('GET', 'search.php?data=' + data, true);
        http.send();
    } else {
        document.getElementById("result").innerHTML = "";
    }
}
function process() {
    if (http.readyState == 4 && http.status == 200) {
        result = http.responseText;
        document.getElementById("result").innerHTML = result;
    }
}

    jQuery(document).ready(function($) {
       $('.toggle').click(function(event) {
        $('.toggle').toggleClass('active');
        $('body').toggleClass('night');
    });



   });
</script>
</body>

</html>