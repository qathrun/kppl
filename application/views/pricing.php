<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pricing Table | SAGOE</title>
    </head>
    <body>
        <header id="header"> 
            <div class="navbar navbar-inverse" role="banner">
                <div class="container">
					
				<div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url('index.php/Welcome');?>">Home</a></li>	
						<li class="active"><a href="<?php echo base_url('index.php/Welcome/pricing');?>">Paket Wisata</a></li>                                                                                                            
                    </ul>
				</div>
                </div>
            </div>
        </header>
        <!--/#header-->
        <section id="page-breadcrumb">
            <div class="vertical-center sun">
                <div class="container">
                    <div class="row">
                        <div class="action">
                            <div class="col-sm-12">
                                <h1 class="title">Harga Paket Wisata</h1>
                                <p>Pilihlah destinasi tujuanmu.</p>
                            </div>                             
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#action-->
        <section class="container"> 
		
            <div class="price-table">
			
                <div class="row">
				<?php foreach($wisata as $u){ ?>
                    <div class="col-sm-6 col-md-3">
                        <div class="single-price price-one">
                            <div class="table-heading">
                                <p class="plan-name"><?php echo $u->Nama_Paket ?></p>
                                <p class="plan-price"><span class="dollar-sign">Rp</span><span class="price"><?php echo $u->Harga_Orang ?></span><span class="month"></span></p>
                            </div>
                            <ul> 
                                <li>Kuota Perjalanan <?php echo $u->Kuota_Perjalanan ?>
                                    <span><i class="fa fa-check"></i></span>
                                </li>
                                <li>Tanggal Wisata <?php echo $u->Tanggal_Wisata ?>
                                    <span><i class="fa fa-check"></i></span>
                                </li>
                                <li>Tanggal Berangkat <?php echo $u->Tanggal_Berangkat ?>
                                    <span><i class="fa fa-check"></i></span> 
                                </li>
                            </ul>
							
							 <!--<a class="btn btn-buynow" name="reservasi" value="basic" method="post" href="<?php echo base_url('index.php/Welcome/reservasi');?>" >
							 Reservasi Sekarang</a> -->
							
							<form method="POST" action="<?php echo base_url('index.php/Welcome/services/'.$u->Kode_Paket);?>" class="btn btn-buynow">
							<!--<input type="hidden" name="jenis" value="basic" >-->
							
							<button type="submit" class="btn btn-info">Lihat Penawaran Detail</button>
							</form>
							
							 
                        </div>
                    </div>
						<?php } ?>
                </div>
			
            </div>
        </section>  		
    </body>
</html>
