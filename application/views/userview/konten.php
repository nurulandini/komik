<?php include 'sparql.php';
?>

<div class="row">
	<div class="container-fluid">
		<div class="col-md-12">
		<div class="container" style="background-color: #8a9dab;border-width: 1px; width: 1120px; height: 500px; border-color:white;">
	
		 <p style="font-family: Trajan Pro; font-size: 35px;color: white; padding-top: 20px; text-align: center; ">ADVENTURE</p><hr color="white">
		  	<?php $i=0;?>
		 	<?php
		 	$term = $id;
		 		$requestURL = getUrlDbpediaAbstract($term);
    			$responseArray =json_decode(request($requestURL),true); 
		 	 foreach($responseArray["results"]["bindings"] as $key):?>
		 		<?php endforeach?>
		 		<?php if($i==0):?>
		 			<div class="row">
		 				<?php endif ?>
		 				<div class="col-md-12">
		 					<div class="row">
		 						<div class="col-md-12">
		 							<div class="container-fluid" style="height: 150px">
		 								<table>
		 									<tr>
		 										<td>
		 											<h4>Title : <?php echo $key['Id']['value']?>"><h5><?php echo $key['Title']['value']?></h4> 	
		 										</td>
		 									</tr>
		 									<tr>
		 										<td>
		 											<h5>Author : <?php echo $key['Id']['value']?>"><h5><?php echo $key['Author']['value']?></h5>
		 										</td>
		 									</tr>
		 								</table>
		 							</div>
		 						</div>
		 					</div>
		 					<div class="row">
		 						<div class="col-md-6">
		 							<div class="container-fluid" style="height: 150px">
		 								<center>
		 								<a href="<?php echo base_url()?>adventure/<?php echo $key['Id']['value']?>"><img src="<?php echo $key['Gambar']['value']?>" style="max-height: 150px;max-width: 150px"></a>
		 								</center>
		 							</div>
		 						</div>
		 						<div class="col-md-6">
		 							<div class="container-fluid">
		 								<table>
		 									<tr>
		 										<th><h4>Deskripsi</h4></th>
		 									</tr>
		 									<tr>
		 										<td><h4>Title : <?php echo $key['Id']['value']?>"><h5><?php echo $key['Synopsis']['value']?></h4> 	</td>
		 									</tr>
		 								</table>
		 							</div>
		 						</div>
		 					</div>
		 				</div>
		 			</div>
			</div>
	</div>
</div>