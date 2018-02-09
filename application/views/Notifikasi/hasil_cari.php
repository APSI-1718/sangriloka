		<div class="right_col" role="main">
		<div class="col-md-9 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Hasil pencarian</h2>
                  
                  <div class="clearfix"></div>
                </div>
               <?php
 
		if(count($cari)>0)
		{
			foreach ($cari as $data) { ?>


                <div class="x_content">
                      <div class="block">
                        <div class="block_content">
                          <h2 class="title">
                               <a href="../detail_konten"><?php echo $data->judul_konten."<br>";
                                      }
									}else{
										echo "Data tidak ditemukan";
										} ?></a>
                                     
                          <div class="byline">
                            <span></span>
                          </div>
                          <p class="excerpt">
                          </p>
                        </div>
                      </div>
                   
                </div>
              </div>
            </div>
        </div>