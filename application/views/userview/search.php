<style type="text/css">
a {
  text-decoration: none;
  display: inline-block;
  font-size: 50px;
}


.previous {
  color: #121c46;
  margin-top: 200px;
}


.next {
  color: black;
  margin-left: 1000px;
}

</style>
<div class="row">
	<div class="container" style="background-color: #8a9dab;border-width: 1px; width: 1120px; height: 500px; border-color:white; padding-top: 50px; margin-top: 100px;">
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
		<a href="<?php echo base_url()?>Genre" class="previous round">&#11164;</a>
	</div>
</div>