<!-- Top Navigation -->
<div class="banner banner5">
	<div class="container">
	<h2>Daftar Gallery</h2>
	</div>
</div>
<!--header-->
<!-- gallery -->
		<div class="gallery">
			<!-- Page Starts Here -->
			<div class="content">
				<div class="container">
					<div class="gallery">
						<div class="gallery-top">

							<?php
							foreach ($record->result_array() as $list) { ?>
								<div class="view view-tenth" >
									<img style width="100%"; height="100%"; src="<?php echo base_url();?>uploads/gallery/<?php echo $list['gambar']; ?>"  alt=""/>
									<div class="mask">
										<h3><?php echo $list['nama_gambar']; ?></h3>
										<p>Deskripsi : <?php echo $list['deskripsi_gambar']; ?></p>
									</div>
								</div>
							<?php } ?>

						</div>
					</div>
				</div>
			</div>
			<!-- Page Ends Here -->
		</div>
		<!-- //gallery -->
