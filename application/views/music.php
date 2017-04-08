<!-- Top Navigation -->
<div class="banner banner5">
	<div class="container ">
	<h2>Daftar Musik</h2>
	</div>

</div>
	<div style="background-color:white; ">
	<div class="col-md-11 table-responsive" style="margin-top:50px; margin-left:50px; ">
	<table border="1" class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead><tr >
        <th width ="1%">No</th>
		<th> Judul Lagu</th>
		<th> Penyanyi</th>
		<th width="25%">Action</th>
      </tr>
  </thead>

	<?php $no=1; foreach($record->result_array() as $list){?>
	<tr>
		<td><?php echo $no;?></td>
		<td><?php echo $list['nama_musik'];?></td>
		<td> <?php echo $list['penyanyi'];?></td> </td>
		<td><Audio controls>
		<source src="<?php echo base_url();?>uploads/musik/<?php echo $list['musik']; ?>" type="audio/mp3"/>
		</Audio>
		</td>
		<?php $no++ ; } ?>
	</tr>


	</table>
	</div>
<!--header-->
<!--start-content-->
<div class="typrography">
	 <div class="container">

	</div>
</div>
