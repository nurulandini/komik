<?php include 'sparqlhorror.php';
?>

<style type="text/css">
a {
  text-decoration: none;
  display: inline-block;
  font-size: 50px;
}


.previous {
  color: #121c46;
  margin-top: 320px;
}


.next {
  color: black;
  margin-left: 1000px;
}

</style>
<div class="row">
	<div class="col-md-12">
		<div class="container" style="background-color: #8a9dab;border-width: 1px; width: 1120px; height: 500px; border-color:white;">
	
		 <p style="font-family: Trajan Pro; font-size: 35px;color: white; padding-top: 20px; text-align: center; ">HORROR</p><hr color="white">
		  	<?php $i=0;?>
		 	<?php
		 		$requestURL = getUrlDbpediaHorror($term);
    			$responseArray =json_decode(request($requestURL),true); 
		 	 foreach($responseArray["results"]["bindings"] as $key):?>
		 		<?php if($i==0):?>
		 			<div class="row">
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
		 					<div class="row">
		 						<div class="container-fluid">
		 							<center>
		 								<a href="<?php echo base_url()?>home/deskripsi/<?php echo $key['Id']['value']?>"><h5><?php echo $key['Title']['value']?></h5></a>
		 							</center>
		 						</div>
		 					</div>
		 				</div>
		 				<?php $i++;?>
		 				<?php if($i==4):?>
		 			</div>
		 				<?php $i=0;?>
		 				<?php endif?>
		 		<?php endforeach?>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12" style="margin-top: -300px">
		<a href="<?php echo base_url()?>Genre" class="previous round">&#11164;</a>
	</div>
</div>