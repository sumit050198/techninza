
<style>
    .testslider-item{
        width:360px;
        max-height:310px;
        margin-left:15px;
    }
    .testslider-item img{
        width:100%;
        height:100%;
    }
    .ours_project_section{
        padding-top:50px;
        padding-bottom:70px;
    }
    .slick-prev:before, .slick-next:before{
           color: #f7f7f7 !important;
    background: #ccc;
    padding-top: 15px;
    padding-bottom: 15px;
    }
    
  .slick-prev:before, .slick-next:before {
          font-size: 32px !important;
  }
    
</style>




    <div class="container container-lg ours_project_section">
        <h2 class="text-color-dark text-center font-weight-bold text-8 line-height-2 mb-5 pb-5">Our Projects</h2>
    <div class="row testslider">
        
        <div class="testslider-item">
            <div class="project-items">
                <img src="img/app_idbook2.png" >
            </div>
        </div>
        <div class="testslider-item">
            <div class="project-items">
                <img src="img/app_dietoncall.png" >
            </div>
        </div>
        <div class="testslider-item">
            <div class="project-items">
                <img src="img/app_okinawa.png" >
            </div>
        </div>
        <!--<div class="testslider-item">-->
        <!--    <div class="project-items">-->
        <!--        <img src="img/logos/ornaz.png" >-->
        <!--    </div>-->
        <!--</div>-->
        
        <!--<div class="testslider-item">-->
        <!--    <div class="project-items">-->
        <!--        <img src="img/logos/idbook.png" >-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="testslider-item">-->
        <!--    <div class="project-items">-->
        <!--        <img src="img/logos/earnezy_1.png" >-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="testslider-item">-->
        <!--    <div class="project-items">-->
        <!--        <img src="img/logos/gourmet.jpg" >-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="testslider-item">-->
        <!--    <div class="project-items">-->
        <!--        <img src="img/logos/erelax.jpg" >-->
        <!--    </div>-->
        <!--</div>-->
        
        <!--<div class="testslider-item">-->
        <!--    <div class="project-items">-->
        <!--        <img src="img/logos/beads.jpg" >-->
        <!--    </div>-->
        <!--</div>-->
        
        <!--<div class="testslider-item">-->
        <!--    <div class="project-items">-->
        <!--        <img src="img/logos/cleardekho.jpg" >-->
        <!--    </div>-->
        <!--</div>-->
        
        <!--<div class="testslider-item">-->
        <!--    <div class="project-items">-->
        <!--        <img src="img/logos/najdik.jpg" >-->
        <!--    </div>-->
        <!--</div>-->
        
        <!--<div class="testslider-item">-->
        <!--    <div class="project-items">-->
        <!--        <img src="img/logos/kangoon.jpg" >-->
        <!--    </div>-->
        <!--</div>-->
        
    </div>
    </div>




  <script type="text/javascript" src="slick/slick.min.js"></script>

<script>
    $('.testslider').slick({
  dots: true,
  infinite: false,
  speed: 300,
    arrows: true,
    autoplay: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>