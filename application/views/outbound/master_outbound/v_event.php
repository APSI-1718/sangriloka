<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url() ?>" class="site_title"><i class="fa fa-leaf"></i> <span>SANGRILOKA</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url() ?>images/user1.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2>Sangri</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
    
                <ul class="nav side-menu">
                  <li><a href="<?=base_url('outbound/master_outbound/outbound')?>"><i class="fa fa-edit"></i> Kelola Outbound</a></li>
                  <li><a href="<?=base_url('outbound/master_outbound/pegawai')?>"><i class="fa fa-group"></i> Kelola Pegawai</a></li>
                  <li><a href="<?=base_url('outbound/master_outbound/absen')?>"><i class="fa fa-check-square-o"></i> Kelola Absen</a></li>
                  <li><a href="<?=base_url('outbound/master_outbound/event')?>"><i class="fa fa-calendar"></i> Kelola Event</a></li>
                  
                </ul>
              </div>
          
            </div>

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Sangri &nbsp; &nbsp;
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                   
                    <li><a  data-toggle="modal" data-target="#logoutModal"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->









 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kelola Event</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <?php 
                        $berhasil = $this->session->flashdata('berhasiltambah'); 
                        if((isset($berhasil)) && (!empty($berhasil))) { ?>
                            <div class="alert alert-success hidden-alert" >
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <?php print_r($berhasil); ?>
                            </div>
                    <?php } ?>
                    
                    <center>
                      <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#tambahModal">
                        <i class="fa fa-plus"></i>&nbsp; Tambah Event
                      </button>
                    </center>
                      <br>
                      <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>ID Event</th>
                          <th>Tanggal Pemesanan</th>
                          <th>Tanggal Penyelenggaraan</th>
                          <th>Kebutuhan</th>
                          <th>Status</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php $i = 1;
                        foreach ($event as $key => $value){
                      ?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $value['id_event']; ?></td>
                          <td><?php echo $value['tanggal_pemesanan']; ?></td>
                          <td><?php echo $value['tanggal_penyelenggaraan']; ?></td>
                          <td><?php echo $value['kebutuhan']; ?></td>
                          <td><?php echo $value['status']; ?></td>
                        </tr>
                      <?php } ?>
                      </tbody>
                      </table>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="tambahModalLabel"><i class="fa fa-plus"></i>&nbsp;&nbsp; Tambah Event</h4>
      </div>

      <div class="modal-body">
        <form data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?=base_url('outbound/master_outbound/event/tambah_event');?>">
          <div class="form-group">
            <input type="hidden" name="id_event" class="form-control" id="id_event" value="<?php echo $idevent; ?>">
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tgl Pemesanan <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <input type="date" name="tanggal_pemesanan" class="form-control" id="tanggal_pemesanan" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Penyelenggaraan <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <input type="date" name="tanggal_penyelenggaraan" class="form-control" id="tanggal_penyelenggaraan" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kebutuhan <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <input type="text" name="kebutuhan" class="form-control" id="kebutuhan" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Status <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <input type="text" name="status" class="form-control" id="status" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary btn-sm">Simpan</button>
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
        </form>
      </div>
    </div>
  </div>
</div>