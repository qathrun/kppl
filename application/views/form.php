<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Halaman Penawaran Detail Paket Wisata</title>
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
                         
						<li><a href="<?php echo base_url('index.php/Welcome');?>" >Home</a></li>
						<li><a href="<?php echo base_url('index.php/Welcome/pricing');?>" >Paket Wisata</a></li>
						
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
                                <center><h2 class="title">Penawaran Paket Wisata</h2>
                                <p>Berikut penawaran yang disediakan. </p></center>
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
		<form action="<?php echo base_url(). 'index.php/welcome/verif/'.$u->Kode_Paket; ?>" method="post">
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
				<td>Alamat_Wisata</td>
				<td><input type="text" name="Alamat_Wisata" placeholder="Alamat Wisata" class="form-control" value="<?php echo $u->Alamat_Wisata ?>" size="80" readonly></td>
			</tr> <th>&nbsp;</th>
			<tr>
				<td>Harga_Orang</td>
				<td><input type="text" name="Harga_Orang" placeholder="Harga/ Orang" class="form-control" value="<?php echo $u->Harga_Orang ?>" size="80" readonly></td>
			</tr> <th>&nbsp;</th>
			<tr>
				<td>Kuota_Perjalanan</td>
				<td><input type="text" name="Kuota_Perjalanan" placeholder="Kuota Perjalanan" class="form-control" value="<?php echo $u->Kuota_Perjalanan ?>" size="80" readonly></td>
			</tr> <th>&nbsp;</th>
			<tr>
				<td>Tanggal_Wisata</td>
				<td><input type="date" name="Tanggal_Wisata" placeholder="Tanggal Wisata" class="form-control" value="<?php echo $u->Tanggal_Wisata ?>" size="80" readonly></td>
			</tr> <th>&nbsp;</th>
			<tr>
				<td>Tanggal_Berangkat</td>
				<td><input type="date" name="Tanggal_Berangkat" placeholder="Tanggal Berangkat" class="form-control" value="<?php echo $u->Tanggal_Berangkat ?>" size="80" readonly></td>
			</tr> <th>&nbsp;</th>
			<tr>
				<td>Deskripsi</td>
				<td><textarea name="Deskripsi" placeholder="Deskripsi" class="form-control" size="80" cols="40" rows="10" readonly><?php echo $u->Deskripsi;?></textarea> </td>	
			</tr> <th>&nbsp;</th>
			<tr>
				<td>Nama_Travel</td>
				<td><input type="text" name="Nama_Travel" placeholder="Nama Travel" class="form-control" value="<?php echo $u->Nama_Travel ?>" size="80" readonly></td>
			</tr> <th>&nbsp;</th>	
			<tr>
				<td>Nomor_HP</td>
				<td><input type="number_format" name="Nomor_HP" placeholder="Nomor_HP" class="form-control" value="<?php echo $u->Nomor_HP ?>" size="80" readonly></td>
			</tr> <th>&nbsp;</th>
			<tr>
				<td>Email_Travel</td>
				<td><input type="text" name="Email_Travel" placeholder="Email_Travel" class="form-control" value="<?php echo $u->Email_Travel ?>" size="80" readonly></td>
			</tr> <th>&nbsp;</th>
			<tr>
				<td>Alamat_Travel</td>
				<td><input type="text" name="Alamat_Travel" placeholder="Alamat_Travel" class="form-control" value="<?php echo $u->Alamat_Travel ?>" size="80" readonly></td>
			</tr> <th>&nbsp;</th>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Next"></td>
			</tr>
		</table>
	</form>	
		<?php } ?>
	</div>
	</center>
    </body>
</html>