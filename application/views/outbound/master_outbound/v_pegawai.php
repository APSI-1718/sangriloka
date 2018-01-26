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
                    <h2>Kelola Pegawai</h2>
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
                        $berhasil = $this->session->flashdata('berhasiledit'); 
                        if((isset($berhasil)) && (!empty($berhasil))) { ?>
                            <div class="alert alert-success hidden-alert" >
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <?php print_r($berhasil); ?>
                            </div>
                    <?php } ?>

                      <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>ID Pegawai</th>
                          <th>Nama Pegawai</th>
                          <th>Alamat</th>
                          <th>JK</th>
                          <th>Tanggal Lahir</th>
                          <th>No Telepeon</th>
                          <th>Email</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Jabatan</th>
                          <th>Posisi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php $i = 1;
                        foreach ($pegawai as $key => $value){
                      ?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $value['id_pegawai']; ?></td>
                          <td><?php echo $value['nama_pegawai']; ?></td>
                          <td><?php echo $value['alamat']; ?></td>
                          <td><?php echo $value['jk']; ?></td>
                          <td><?php echo $value['tgl_lahir']; ?></td>
                          <td><?php echo $value['no_tlp']; ?></td>
                          <td><?php echo $value['email']; ?></td>
                          <td><?php echo $value['username']; ?></td>
                          <td><?php echo $value['password']; ?></td>
                          <td><?php echo $value['jabatan']; ?></td>
                          <td><?php echo $value['posisi']; ?></td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs tombolpegawai" title="Ubah data"
                                            data-toggle="modal" data-target="#editModal"
                                            data-id_pegawai="<?php echo $value['id_pegawai']; ?>"
                                            data-nama_pegawai="<?php echo $value['nama_pegawai']; ?>"
                                            data-alamat="<?php echo $value['alamat']; ?>"
                                            data-jk="<?php echo $value['jk']; ?>"
                                            data-tgl_lahir="<?php echo $value['tgl_lahir']; ?>"
                                            data-no_tlp="<?php echo $value['no_tlp']; ?>"
                                            data-email="<?php echo $value['email']; ?>"
                                            data-username="<?php echo $value['username']; ?>"
                                            data-password="<?php echo $value['password']; ?>"
                                            data-jabatan="<?php echo $value['jabatan']; ?>"
                                            data-posisi="<?php echo $value['posisi']; ?>">
                                                <span class="fa fa-pencil"></span>&nbsp; Ubah
                                        </button>
                          </td>
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


<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title edit" id="editModalLabel"></h4>
      </div>

      <div class="modal-body">
        <form data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?=base_url('outbound/master_outbound/pegawai/ubah_pegawai');?>">
          <div class="form-group">
            <input type="hidden" name="id_pegawai" class="form-control id_pegawai" id="id_pegawai">
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pegawai <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <input type="text" name="nama_pegawai" class="form-control nama_pegawai" id="nama_pegawai" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <textarea name="alamat" class="form-control alamat" id="alamat" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <input type="date" name="tgl_lahir" class="form-control tgl_lahir" id="tgl_lahir" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">No Telepon <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-8 col-xs-12">
            <input type="text" name="no_tlp" class="form-control no_tlp" id="no_tlp" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <input type="text" name="email" class="form-control email" id="" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Username <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <input type="text" name="username" class="form-control username" id="username" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Password <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <input type="text" name="password" class="form-control password" id="password" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-8 col-xs-12">
            <input type="text" name="jabatan" class="form-control jabatan" id="jabatan" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Posisi <span class="required">*</span>
            </label>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <input type="text" name="posisi" class="form-control posisi" id="posisi" required oninvalid="this.setCustomValidity('Silahkan isi kolom ini !')" oninput="setCustomValidity('')">
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