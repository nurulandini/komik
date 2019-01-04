<div class="row">
	<div class="container" style="background-color: #8a9dab;border-width: 1px; width: 1120px; height: 500px; border-color:white;">
		<?php foreach($data["results"]["bindings"] as $key): ?>
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
		 					<div class="row">
		 						<div class="container-fluid">
		 							<center>
		 								<a href="<?php echo base_url()?>home/deskripsi/<?php echo $key['Id']['value']?>"><h5><?php echo $key['Title']['value']?></h5></a>
		 							</center>
		 						</div>
		 					</div>
		 				</div>
		<?php endforeach ?>
	</div>
</div>