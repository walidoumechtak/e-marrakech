



<?php
    if(isset($includeF)){
        include "footer.php";
    }
 ?>

<script src="themes/js/jquery-3.6.0.min.js"></script>
<script src="themes/librjs/particles.js"></script>
<script src="themes/librjs/app.js"></script>
<script src="themes/js/bootstrap.min.js"></script>
<script src="themes/js/owl.carousel.min.js"></script>

<script>
 
 $('.owl-carousel').owlCarousel({
    
  
    loop:true,
    autoplay:true,
    margin:25,
    nav:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

</script>

</body>
</html>