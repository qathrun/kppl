<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Halaman Verifikasi dan Pengisian Data</title>
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
                         
						<li><a href="<?php echo base_url('index.php/Welcome');?>">Home</a></li>	
						<li><a href="<?php echo base_url('index.php/Welcome/pricing');?>">Paket Wisata</a></li>  
							
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
							<br><br>
                                <center><h2 class="title">Halaman Verifikasi dan Pengisian Data Paket WIsata</h2>
                                <p>Berikut formulir pengisian  </p></center>
                            </div>                             
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#action-->
		<center>
		
		<div class="col-md-12 col-sm-6"> 
		<?php foreach($wisata as $u){ ?>
		<form action="<?php echo base_url(). 'index.php/Welcome/tambah'; ?>" method="post">
		<table cellspacing="20" style="margin:20px auto;">
	
			<br><br>
			<tr>
				
				<td>Kode_Paket</td> 
				<td><input type="number_format" name="Kode_Paket" placeholder="Kode Paket" class="form-control" value="<?php echo $u->Kode_Paket ?>" size="80" readonly></td>
			</tr> <th>&nbsp;</th>
			<tr>
				<td>Nama_Paket</td>
				<td><input type="text" name="Nama_Paket" placeholder="Nama Paket" class="form-control" value="<?php echo $u->Nama_Paket ?>" size="80" readonly></td>
			</tr> <th>&nbsp;</th>
			<tr>
				<td>NO_KTP</td>
				<td><input type="number_format" name="NO_KTP" placeholder="NO_KTP" class="form-control"  size="80" required ></td>
			</tr> <th>&nbsp;</th>

			<tr>
				<td>Request_Tambahan</td>			
				<td><textarea input type="text" name="Request_Tambahan" placeholder="Request_Tambahan" class="form-control" size="80" cols="20" rows="10" required></textarea> </td>	
			</tr> <th>&nbsp;</th>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Booking"></td>
			</tr>
		</table>
	</form>	
		<?php } ?>
	</div>
	</center>
    </body>
</html>