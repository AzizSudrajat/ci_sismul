<!-- Top Navigation -->
<div class="banner banner5">
  <div class="container">
  <h2>Daftar Video</h2>
  </div>
</div>
<!--header-->
<!-- gallery -->
    <div class="gallery" >
      <!-- Page Starts Here -->
      <div class="content">
        <div class="container">
          <div class="gallery" >
            <?php
            foreach ($record->result_array() as $list) {
              if ($list['id'] % 2 == 1) {
            ?>

            <div class="col-md-6 news-left" style="margin-bottom:20px; margin-top:20px;">
              <video width="550" height="300" controls>
                <source src="<?php echo base_url();?>uploads/videos/<?php echo $list['video']; ?>" type="video/mp4"/>
              </video>
            </div>
            <div class="col-md-6 news-right" style="margin-bottom:20px; margin-top:20px;">
              <h4> <b> Judul : </b> <?php echo $list['nama_video']; ?></h4>
              <h4 align="justify"> <b> Deskripsi : </b><br/> <?php echo $list['deskripsi_video']; ?></h4>
            </div>
            <div class="clearfix"> </div>

            <?php } else { ?>
              <div style="background-color:white">
                <div class="col-md-6 news-right" style="margin-bottom:20px; margin-top:20px;">
                  <h4> <b> Judul : </b> <?php echo $list['nama_video']; ?></h4>
                  <h4 align="justify"> <b> Deskripsi : </b> <br/> <?php echo $list['deskripsi_video']; ?></h4>
                </div>
                <div class="col-md-6 news-left" style="margin-bottom:20px; margin-top:20px;">
                  <video width="550" height="300"controls>
                    <source src="<?php echo base_url();?>uploads/videos/<?php echo $list['video']; ?>" type="video/mp4"/>
                  </video>
                </div>
                <div class="clearfix"> </div>
              </div>
            <?php
            }
            }
            ?>
          </div>
        </div>
      </div>
      <!-- Page Ends Here -->
    </div>
    <!-- //gallery -->
