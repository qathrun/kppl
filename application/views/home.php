<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home | Traveller</title>
</head>
<body>
	<header id="header">      
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>                                        
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="<?php echo base_url('index.php/Welcome');?>">Home</a></li>
						<li><a href="<?php echo base_url('index.php/Welcome/pricing');?>">Paket Wisata</a></li>					                                                                                                            
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->
    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>website Traveller</h1>
                        <p>Nikmati liburan mu bersama kami.</p>
                    </div>
					
                    <img src="<?php echo base_url('gambar/images/home/slider/dora.png');?>" class="slider-hill" alt="slider image">
					<!--<img src="<?php echo base_url('gambar/images/home/slider/hill.png');?>" class="slider-hill" alt="slider image">-->
                    <img src="<?php echo base_url('gambar/images/home/plane.png');?>" class="slider-house" alt="slider image">
                    <img src="<?php echo base_url('gambar/images/home/slider/sun.png');?>" class="slider-sun" alt="slider image"> 
                    <img src="<?php echo base_url('gambar/images/home/slider/birds1.png');?>" class="slider-birds1" alt="slider image">				
                    <img src="<?php echo base_url('gambar/images/home/slider/birds1.png');?>" class="slider-birds2" alt="slider image">  
						
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="<?php echo base_url('gambar/images/home/icon1.png');?>" alt=""> 
                        </div>
                        <h2>Paket Wisata</h2>
                        <p>Pilihlah destinasi wisatamu disini</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                             <img src="<?php echo base_url('gambar/images/home/icon2.png');?>" alt=""> 
                        </div>
                        <h2>Travel Organizer</h2>
                        <p>Pilihlah travel oraganizer disini.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="<?php echo base_url('gambar/images/home/icon3.png');?>" alt="">
                        </div>
                        <h2>Akomodasi dan Penginapan</h2>
                        <p>Pilihlah akomodasi dan penginapan disini.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> 			
</body>
</html>
