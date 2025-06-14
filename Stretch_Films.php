<?php include('header.php'); ?>

<section class="page-title" style="background-image:url(images/background/featured-2-bg.jpg);">
    <div class="auto-container">
        <h1>Strech Films</h1>
    </div>

    <!--page-info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Strech Films</li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="social-nav clearfix">
                        <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <section class="content-section services-content">
<div id="imageSlider" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#imageSlider" data-slide-to="0" class="active"></li>
        <li data-target="#imageSlider" data-slide-to="1"></li>
         <li data-target="#imageSlider" data-slide-to="2"></li>
          <li data-target="#imageSlider" data-slide-to="3"></li>
     
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="images/Screenshot 2025-02-22 144623.png" class="img-responsive center-block" alt="Slider Image 1" style="width: 350px;">
        </div>
        <div class="item">
            <img src="images/stretch-film-roll-at-picknpack.jpg" class="img-responsive center-block" alt="Slider Image 2" style="width: 350px;">
        </div>
        <div class="item">
            <img src="images/stretch-film-roll.jpeg" class="img-responsive center-block" alt="Slider Image 2" style="width: 350px;">
        </div>
          <div class="item">
            <img src="images/colored-stretch-films-1000x1000.webp" class="img-responsive center-block" alt="Slider Image 2" style="width: 350px;">
        </div>
        
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#imageSlider" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#imageSlider" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

                </section>
            </div>

            <!--Sidebar-->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <aside class="sidebar about-sidebar">
                    <h2><b>Strech Films</b></h2>
                    <p>A leading manufacturer of high-quality Strech Films designed for efficient storage and transportation. Our innovative solutions ensure durability, strength, and cost-effectiveness for various industries.</p>
                    <h3>Our Products:</h3>
                   
                    <div class="sidebar-widget download-links">
                        <div class="sec-title-seven"><h2>Download Letterhead</h2></div>
                        <ul class="files">
                            <li><a href="file/tunnel.pdf" target="_blank"><span class="fa fa-file-pdf-o"></span> Download here</a></li>
                        </ul>
                    </div>
                    <!--quote-widget-->
                    <div class="call-to-action-four" style="background-image:url(images/resource/quote-widget.jpg);">
                        <div class="title">Any Questions related Solutions? Call us</div>
                        <a class="theme-btn btn-style-one" href="contact-us.php">GET QUOTES</a>
                    </div>
                </aside>
            </div>
            <!--Sidebar-->
        </div>
    </div>
</div>
<!-- jQuery and Bootstrap JS -->
<script>
    $(document).ready(function(){
        $('#imageSlider').carousel();
    });
</script>
<?php include('footer.php'); ?>
