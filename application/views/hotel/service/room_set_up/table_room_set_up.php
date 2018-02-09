
 <div class="right_col" role="main">
<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Room Set-Up </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
              
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


             <!-- Flash Data -->

        <?php
              $berhasil = $this->session->flashdata('tambahdata');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success alertservice">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>

        <?php
              $berhasil = $this->session->flashdata('editdata');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success alertservice">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>

        <?php
              $berhasil = $this->session->flashdata('deletedata');
              if ((isset($berhasil)) && (!empty($berhasil))) {?>
              <div class="alert alert-success alertservice">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php print_r($berhasil);?>
          </div>
        <?php } ?>

              
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#tambahModal"><span class="fa fa-plus"></span>&nbsp; Tambah Data</button>
              
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>id_room</th>
                          <th>nama_room</th>
                          <th>jenis_room</th>
                          <th>gambar</th>
                          <th>pralatan</th>
                          <th width="200px">Aksi</th>

                        </tr>
                      </thead>


                      <tbody>

                       <?php $i=1; foreach ($roomsetup as $value) { ?>
                                <tr>
                                <td><?php echo $i?></td>
                                <td><?php echo $value['id_room']; ?></td>
                                <td><?php echo $value['nama_room']; ?></td>
                                <td><?php echo $value['jenis_room']; ?></td>
                                <td><img src="<?php echo site_url ('../assets/img/'.$value['gambar']) ?>" width="120px" /></td>

                                <td><?php echo 
                                            "<button type='button' class='btn btn-info tombol'>
                                                <i class='glyphicon glyphicon-list-alt'></i> Detail Pralatan
                                              </button> "
                                    ?></td>

                                <td><?php
                                echo "
                                        <button type='button' class='btn btn-warning tombol'
                                              data-toggle='modal' data-target='#editModal'
                                              data-='id_room". $value['id_room']."'
                                              data-='nama_room". $value['nama_room']."'
                                              data-='jenis_room". $value['jenis_room']."'
                                              data-='gambar". $value['gambar']."'
                                              data-='pralatan". $value['pralatan']."'>
                                              <i class='glyphicon glyphicon-pencil'></i> Edit
                                       </button>&nbsp;&nbsp;
                                      <button type='button' class='btn btn-danger tombol'
                                          data-toggle='modal' data-target='#deleteModal'
                                          data-id_room='". $value['id_room']."'
                                          data-nama_room='". $value['nama_room']."'><i class='glyphicon glyphicon-trash'></i> Hapus
                                      </button>
                                     

                                       "?>  </td>
                                </tr>


                              <?php $i++; } ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                </div>
            </div>
          </div>
        </div>




<!-- Modal tambah data -->

<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" >
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="tambahModalLabel">Tambah Room Set-Up</h4>
        </div>

        <!-- Modal Body -->

        <div class="modal-body">
          <form method="post" action="<?php echo base_url()?>hotel/service/room_set_up/tambah_data">
            <input type="hidden" name="id_room" class="form-control id_room" id="id_room">
            <div class="form-group">
              <label for="nama_room" class="control-label">Nama Room Set-Up :</label>
              <input type="text" name="nama_room" class="form-control" id="nama_room" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
            </div>

            <div class="form-group">
              <label for="jenis_room" class="control-label">Jenis Room Set-Up</label>
              <select type="text" name="jenis_room" class="form-control jenis_room" id="jenis_room" style="width: 150px;">
                <option value="Seminar">Seminar</option>
                <option value="Wedding">Wedding</option>
                <option value="Metting Room">Metting Room</option>
                
              </select>
              <style type="text/css">
                option{margin-bottom:10px;}
              </style>
            </div>

            <div class="form-group">
              <label for="gambar" class="control-label">Gambar Room Set-Up :</label>
              <input type="file" name="gambar" class="form-control" id="gambar" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
            </div>

            <div class="form-group">
              <label for="pralatan" class="control-label">Pralatan Room Set-Up :</label>
              <input type="text" name="pralatan" class="form-control" id="pralatan" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
      </div>
    </div>

</div>

<!-- Modal edit data -->

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" >
    <div class="modal-dialog modal-sm" role="document" >
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title edit" id="editModalLabel">Edit Data</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url() ?>hotel/service/room_set_up/edit_data">

            <div class="form-group">
              <input type="hidden" name="id_room" class="form-control id_room" id="id_room">

              <div class="form-group">
              <label for="nama_room" class="control-label">Nama Room Set-Up :</label>
              <input type="text" name="nama_room" class="form-control" id="nama_room" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
            </div>

            <div class="form-group">
              <label for="jenis_room" class="control-label">Jenis Room Set-Up</label>
              <select type="text" name="jenis_room" class="form-control jenis_room" id="jenis_room" style="width: 150px;">
                <option value="Seminar">Seminar</option>
                <option value="Wedding">Wedding</option>
                <option value="Metting Room">Metting Room</option>
                
              </select>
              <style type="text/css">
                option{margin-bottom:10px;}
              </style>
            </div>

            <div class="form-group">
              <label for="gambar" class="control-label">Gambar Room Set-Up :</label>
              <input type="file" name="gambar" class="form-control" id="gambar" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
            </div>

            <div class="form-group">
              <label for="pralatan" class="control-label">Pralatan Room Set-Up :</label>
              <input type="text" name="pralatan" class="form-control" id="pralatan" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
      </div>
    </div>
</div>

<!-- Modal delete data -->

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="deleteModalLabel">Delete Data</h4>
        </div>
        <div class="modal-body">
          <div class="delete alert alert-danger"></div>
        </div>
        <div class="modal-footer">
            <form method="post" action="<?php echo base_url() ?>hotel/service/pengelolaan_event/delete_data">
              <input type="hidden" name="id_event" class="form-control id_event" id="id_event">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Cancel</button>
          <button class="btn btn-danger" type="submit">Delete</button>
        </div>
        </form>
      </div>
    </div>
</div>





<!-- Modal Detail -->

<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" >
    <div class="modal-dialog modal-sm" role="document" >
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title detail" id="detailModalLabel">Detail Event</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url() ?>hotel/service/pengelolaan_event/detail_event">

            <div class="form-group">
              <input type="hidden" name="id_event" class="form-control id_event" id="id_event">
              <labelrequired oninvalid="this.setCustomValidity('Tidak boleh dikosongkan')" oninput="setCustomValidity('')" for="nama_event" class="control-label">Nama Event :</label>
              <input type="text" name="nama_event" class="form-control nama_event" id="nama_event" required oninvalid="this.setCustomValidity('Tidak boleh dikosongkan')" oninput="setCustomValidity('')">
            </div>

            <div class="form-group">
              <label for="jadwal_event" class="control-label">Jadwal Event :</label>
              <input type="date" name="jadwal_event" class="form-control jenis_event" id="jadwal_event" required oninvalid="this.setCustomValidity('Tidak boleh dikosongkan')" oninput="setCustomValidity('')">
            </div>

            <div class="form-group">
              <label for="jenis_event" class="control-label">Jenis Event :</label>
              <select type="text" name="jenis_event" class="form-control jenis_event" id="jenis_event" style="width: 150px;">
                <option value="Seminar">Seminar</option>
                <option value="Wedding">Wedding</option>
                <option value="Metting Room">Metting Room</option>
                
              </select>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-btn-default" data-dismiss="modal">Cancel</button>
          
        </div>
        </form>
      </div>
    </div>
</div>
