<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="<?php echo base_url('gambar2/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/css/bootstrap-responsive.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/css/fullcalendar.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/css/matrix-style.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/css/matrix-media.css');?>" rel="stylesheet">
<link href="<?php echo base_url('gambar2/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel='stylesheet' type='text/css'>
<style>
table{
	width: 90%;
}
#table-scroll {
  height:150px;
  overflow:auto;  
  
}
</style>
</head>
<body>

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-file"></i>Addons</a>
<br><br><br><br>
<ul>
	<li><a href="<?php echo base_url('index.php/Welcome/read');?>" ><i class="icon icon-home"></i> <span>Database order</span></a> </li>
	
</ul>
</div>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Database Order</h1>
  </div>
  <div class="container-fluid" style="height:90vh">
    <hr>
    <div class="row-fluid" style="height:90%">
      <div class="span12" style="height:100%">
       
   
        <div class="widget-box" style="height:100%">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Database Order Admin</h5>
          </div>
          <div class="widget-content nopadding" style="height:90%">
		  <div id="table-scroll" style="height:100%">
            <table class="table table-bordered data-table" cellpadding="0" cellspacing="0" style="width: 100%; height:100%">
              <thead>
			  
                <tr>
				<th>Kode_Paket</th>
				<th>Nama_Paket</th>
				<th>NO_KTP</th>
				<th>Request_Tambahan</th>
                </tr>
              </thead>
              <tbody>
                	<?php foreach($order as $u){ ?>
					<tr><center>
			
			<td><?php echo $u->Kode_Paket ?></td>
			<td><?php echo $u->Nama_Paket ?></td>
			<!--<td><?php echo $u->NO_KTP ?></td>
			<td><?php echo $u->Request_Tambahan ?></td>-->
			</center>
		</tr>
		<?php } ?>
            </table>
			</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="copyright-text text-center">
                            <p>&copy; Traveller. All Rights Reserved.</p>
                           
                        </div>
<!--end-Footer-part-->
<script  src="<?php echo base_url('gambar2/js/jquery.min.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/jquery.ui.custom.js');?>"></script>
<script src="<?php echo base_url('gambar2/js/matrix.calendar.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/matrix.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/fullcalendar.min.js');?>"></script>
<script  src="<?php echo base_url('gambar2/js/bootstrap.min.js');?>"></script>
</body>
</html>
