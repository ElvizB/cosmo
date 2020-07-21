<!--firebase-->
<script src="https://www.gstatic.com/firebasejs/6.3.4/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.3.4/firebase-firestore.js"></script>

<!-- JQuery -->
<script type="text/javascript" src="<?php echo RUTA_JS?>jquery-3.4.1.js"></script>

<!-- Bootstrap tooltips  -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
</script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js">
</script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js">
</script>
<!-- Recaptcha -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src="<?php echo RUTA_JS?>owl/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS?>owl/scritps.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS?>loading.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS?>app.js"></script>
<script type="text/javascript">
var lastScrollTop = 0;
var scroollNone = document.documentElement.scrollTop;
navbar = document.getElementById("navbar");
window.addEventListener("scroll", function() {
    var scrollTop = window.pageYOffset || scroollNone;
    if (scrollTop > lastScrollTop) {
        navbar.style.top = "-100px";
        navbar.style.background = "transparent";
    } else {
        navbar.style.top = "0";
    }
    lastScrollTop = scrollTop;
})

$(document).ready(function() {

    $(window).scroll(function() {

        if ($(window).scrollTop() > 300) {
            $('nav').addClass('navBlock');
        } else {
            $('nav').removeClass('navBlock');
        }
    });

});

$(document).ready(function() {

    $(window).scroll(function() {

        if ($(window).scrollTop() > 300) {
            $('.prueba').addClass('navBlock_secodnary');
        } else {
            $('.prueba').removeClass('navBlock_secodnary');
        }
    });

});

function menuToggle() {
    var nav = document.getElementById('menu-overlay');
    nav.classList.toggle('active');
    var nav = document.getElementById('toggleIcon');
    nav.classList.toggle('active');
}


new WOW().init();
</script>
</body>

</html>