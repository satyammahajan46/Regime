<!-- footer -->
<div class="footer">
    <div class="container">
        <h3><a href="index.html">REGIME</a></h3>
        <p>© 2017 Goods & Service Taxs. All rights reserved | Design by <a href="http://w3layouts.com">Satyam & Rohit</a></p>
        <div class="social-icons">
            <ul>
                <li><a href="#" class="fa fa-facebook icon icon-border facebook"> </a></li>
                <li><a href="#" class="fa fa-twitter icon icon-border twitter"> </a></li>
                <li><a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a></li>
                <li><a href="#" class="fa fa-dribbble icon icon-border dribbble"> </a></li>
                <li><a href="#" class="fa fa-rss icon icon-border rss"> </a></li>
            </ul>
        </div>
    </div>
</div>
<!-- //footer -->
<script src="js/responsiveslides.min.js"></script>
<script src="js/jarallax.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->