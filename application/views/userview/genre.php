<div class="row">
	<div class="col-md-4">
		<div class="container" style="border-width: 0px;background-color: #0e2854;height: 60px;color: white;text-align: center;padding-top: 3px;font-family: Trajan Pro; font-size: 30px;width: 360px;">
			<a  class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>Genre/action" style="color: white;">ACTION</a>
		</div>
		<div class="container" style="border-width: 0px;background-color: #8a9dab;height: 300px;width: 360px">
			<?php include 'sparqladventure1.php'?>
			<?php $i=0;?>
		 	<?php
		 		$requestURL = getUrlDbpediaAdventure1($term);
    			$responseArray =json_decode(request($requestURL),true); 
		 	 foreach($responseArray["results"]["bindings"] as $key):?>
		 		<?php if($i==0):?>
		 				<?php endif ?>
		 				<div class="col-md-3">
		 					<div class="row">
		 						<div class="col-md-12">
		 							<div class="container-fluid" style="height: 150px">
		 								<center>
		 								<a href="<?php echo base_url()?>home/deskripsi/<?php echo $key['Id']['value']?>"><img src="<?php echo $key['Gambar']['value']?>" style="max-height: 150px;max-width: 150px"></a>
		 								</center>
		 							</div>
		 						</div>
		 					</div>
		 				</div>
		 				<?php $i++;?>
		 				<?php if($i==4):?>
		 				<?php $i=0;?>
		 				<?php endif?>
		 		<?php endforeach?>
		</div>
		<div class="container" style="border-width: 0px;background-color: #0e2854;height: 60px;color: white;text-align: center;padding-top: 3px;font-family: Trajan Pro; font-size: 30px;width: 360px;">
			<a  class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>Genre/adventure" style="color: white;">ADVENTURE</a>
		</div>
		<div class="container" style="border-width: 0px;background-color: #8a9dab;height: 300px;width: 360px">
			<?php include 'sparqladventure1.php'?>
			<?php $i=0;?>
		 	<?php
		 		$requestURL = getUrlDbpediaAdventure1($term);
    			$responseArray =json_decode(request($requestURL),true); 
		 	 foreach($responseArray["results"]["bindings"] as $key):?>
		 		<?php if($i==0):?>
		 				<?php endif ?>
		 				<div class="col-md-3">
		 					<div class="row">
		 						<div class="col-md-12">
		 							<div class="container-fluid" style="height: 150px">
		 								<center>
		 								<a href="<?php echo base_url()?>home/deskripsi/<?php echo $key['Id']['value']?>"><img src="<?php echo $key['Gambar']['value']?>" style="max-height: 150px;max-width: 150px"></a>
		 								</center>
		 							</div>
		 						</div>
		 					</div>
		 				</div>
		 				<?php $i++;?>
		 				<?php if($i==4):?>
		 				<?php $i=0;?>
		 				<?php endif?>
		 		<?php endforeach?>
		</div>
	</div>
	<div class="col-md-4">
		<div class="container" style="border-width: 0px;background-color: #0e2854;height: 60px;color: white;text-align: center;padding-top: 3px; font-family: Trajan Pro; font-size: 30px;width: 360px;">
			<a  class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>Genre/comedy" style="color: white;">COMEDY</a>
		</div>
		<div class="container" style="border-width: 0px;background-color: #8a9dab;height: 300px;width: 360px">
			<table>
				<tr>
					<td width="300px" height="300px"><img src="<?php echo base_url()?>/img/juki.jpg" style="width: 160px; height: 220px;"></td><td>&nbsp;</td>
					<td width="300px" height="300px"><img src="<?php echo base_url()?>/img/tahi.jpg" style="width: 160px; height: 220px;"></td>
				</tr>
			</table>
		</div>
		<div class="container" style="border-width: 0px;background-color: #0e2854;height: 60px;color: white;text-align: center;padding-top: 3px;font-family: Trajan Pro; font-size: 30px;width: 360px;">
			<a  class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>Genre/fantasy" style="color: white;">FANTASY</a>
		</div>
		<div class="container" style="border-width: 0px;background-color: #8a9dab;height: 300px;width: 360px">
			<table>
				<tr>
					<td width="300px" height="300px"><img src="<?php echo base_url()?>/img/fantasy.png" style="width: 160px; height: 220px;"></td><td>&nbsp;</td>
					<td width="300px" height="300px"><img src="<?php echo base_url()?>/img/fantasy2.jpg" style="width: 160px; height: 220px;"></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="col-md-4">
		<div class="container" style="border-width: 0px;background-color: #0e2854;height: 60px;color: white;text-align: center;padding-top: 3px;font-family: Trajan Pro; font-size: 30px;width: 360px;">
			<a  class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>Genre/horror" style="color: white;">HORROR</a>
		</div>
		<div class="container" style="border-width: 0px;background-color: #8a9dab;height: 300px;width: 360px">
			<table>
				<tr>
					<td width="300px" height="300px"><img src="<?php echo base_url()?>/img/horror2.jpeg" style="width: 160px; height: 220px;"></td><td>&nbsp;</td>
					<td width="300px" height="300px"><img src="<?php echo base_url()?>/img/horror3.jpg" style="width: 160px; height: 220px;"></td>
				</tr>
			</table>
		</div>
		<div class="container" style="border-width: 0px;background-color: #0e2854;height: 60px;color: white;text-align: center;padding-top: 3px; font-family: Trajan Pro; font-size: 30px;width: 360px;">
			<a  class="nav-link text-uppercase text-expanded" href="<?php echo base_url()?>Genre/romance" style="color: white;">ROMANCE</a>
		</div>
		<div class="container" style="border-width: 0px;background-color: #8a9dab;height: 300px;width: 360px">
			<table>
				<tr>
					<td width="300px" height="300px"><img src="<?php echo base_url()?>/img/1.jpg" style="width: 160px; height: 220px;"></td><td>&nbsp;</td>
					<td width="300px" height="300px"><img src="<?php echo base_url()?>/img/romance2.jpg" style="width: 160px; height: 220px;"></td>
				</tr>
			</table>
		</div>
	</div>
</div>