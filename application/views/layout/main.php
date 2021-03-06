<!DOCTYPE>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh3IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/script/css/lel.css">
	<script src="<?php echo base_url() ?>script/css/sweetalert2.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>script/css/sweetalert2.min.css">
	<script type="<?php echo base_url() ?>/script/js/script.jss"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<title>KomikQ</title>
</head>
<body style="background-color: #c1c1c1;">
	<?php 
	$this->load->view('layout/navbar');
	if ($page=='userview/home') {
			$menu['home'] = 'active';
			$menu['genre'] = '';
			$menu['popular'] = '';
			$menu['about'] = '';
			$this->load->view('layout/menu',$menu);
		 }
		 elseif ($page=='userview/genre') {
		  	$menu['home'] = '';
		  	$menu['genre'] = 'active';
		  	$menu['popular'] = '';
			$menu['about'] = '';
			$this->load->view('layout/menu',$menu);
		  }
		  elseif ($page=='userview/about') {
		   $menu['home'] = '';
		  	$menu['genre'] = '';
		  	$menu['popular'] = '';
			$menu['about'] = 'active';
			$this->load->view('layout/menu',$menu);
		   } 
	?>
	<div class="container" style="border-color: <?php echo $border?>;border-style: solid;">
		<?php $this->load->view($page)?>
	</div>
</body>
<script type="text/javascript" src="<?php echo $base_url() ?>script/main.js"></script>
</html>