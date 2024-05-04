
<style>
    .testslider-item{
        width:200px;
        max-height:250px;
        margin-left:15px;
        background:#eee;
    }
    .testimonial blockquote{
        background:none!important;
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
    padding-top: 10px;
    padding-bottom: 10px;
    }
    
  .slick-prev:before, .slick-next:before {
          font-size: 25px !important;
  }
    
    
    .testimonial blockquote:before{
        color: #777;
    display: block !important;
    left: 10px;
    top: 0;
    content: "“";
    font-size: 50px;
    font-style: normal;
    line-height: 1;
    position: absolute;
    }
    .testimonial blockquote:after{
           color: #777;
    display: block !important;
    right: 10px;
    font-size: 50px;
    font-style: normal;
    line-height: 1;
    position: absolute;
    bottom: -0.5em;
    content: "”";
    }
</style>




    <div class="container container-lg ours_project_section">
        <h2 class="text-color-dark text-center font-weight-bold text-8 line-height-2 mb-5 pb-5">Our Happy Clients</h2>
    <div class="row testmoinalsslider">
        
        <div class="testslider-item testimonial">
            <div class="project-items">
                <blockquote>
                    <p class="text-color-dark opacity-7 mb-0">Techninza team is great they helped me in development of software for my Idbook Hotel Booking Chain.</p>
                    </blockquote>
                    <p style="padding-left: 40px;"><b>Subham Sahu, CEO, Idbook</b></p>
            </div>
        </div>
        <div class="testslider-item testimonial" >
            <div class="project-items">
                <blockquote>
                    <p class="text-color-dark opacity-7 mb-0">Techninza has done a great job in generating leads for my Real estate Business and they also helped in making our website user friendly. </p>
                    </blockquote>
                    <p style="padding-left: 40px;"><b>Alok Virmani</b></p>
            </div>
        </div>
        <div class="testslider-item testimonial">
            <div class="project-items">
                <blockquote>
                    <p class="text-color-dark opacity-7 mb-0">I was looking for a website development company for a  long time my journey get successful with techninza they are really good.</p>
                    </blockquote>
                    <p style="padding-left: 40px;"><b>Ondrej Lenc, CEO, Masaz4you</b></p>
            </div>
        </div>
        <div class="testslider-item testimonial">
            <div class="project-items">
              <blockquote>
                    <p class="text-color-dark opacity-7 mb-0">I was looking for a good and long term team for my Ecommece app, and there  I met with the team Techninza, they understand the clients need and work accordingly. </p>
                    </blockquote>
                    <p style="padding-left: 40px;"><b>Pawan Soni, CEO, Gourmet store</b></p>
            </div>
        </div>
        
        
        
    </div>
    </div>




  <script type="text/javascript" src="slick/slick.min.js"></script>

<script>
    $('.testmoinalsslider').slick({
  dots: true,
  infinite: false,
  speed: 300,
    arrows: false,
    autoplay: true,
  slidesToShow: 3,
  slidesToScroll: 1,
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