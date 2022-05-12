<?php
if(!defined('ACCESS')) {header("Location: http://hashnetlinks.com/404.php");}
else
{?>
<div class="row p-0">
    <div class="col-12 p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators" style="margin-bottom:0 !important; opacity:1;">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active position-relative">
                    <img src="assects/img/slider3.jpg" class="d-block w-100" alt="...">
                    <div class="slider_buttons position-absolute top-0">
                        <!-- <div>
                            <h6>Learn Quran Online</h6>
                            <p>Stay Home</p>
                        </div> -->
                        <!-- <a href=""><button>Free Trial</button></a> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assects/img/slider2.png" class="d-block w-100" alt="...">
                    <div class="slider_buttons position-absolute top-0">
                        <!-- <div>
                            <h6>Learn Quran Online</h6>
                            <p>Stay Home</p>
                        </div> -->
                        <!-- <a href=""><button>Free Trial</button></a> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assects/img/slider1.png" class="d-block w-100" alt="...">
                    <div class="slider_buttons position-absolute top-0">
                        <!-- <div>
                            <h6>Learn Quran Online</h6>
                            <p>Stay Home</p>
                        </div> -->
                        <!-- <a href=""><button class="p-3">Free Trial</button></a> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php  } ?>