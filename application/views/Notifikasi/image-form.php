<div class="container" style="margin-top:50px;">

<h1>Sistem Pengelolaan Gambar</h1>

<?php
if ($error == true) {
?>
<div class="alert alert-danger alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
	<strong><?=$error?></strong>
</div>
<?php } ?>

<?php
if (@$this->session->flashdata('success') == true) {
?>
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
	<strong>Data berhasil di-upload!</strong>
</div>
<?php } ?>

<hr>
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#tambahDataModal"><i class="glyphicon glyphicon-plus"></i> Tambah Image</button>
<hr>

<?php
$i = 1;

if ($total==null) {
?>
	<div class="alert alert-danger" role="alert">
		<strong>No records found!</strong>
	</div>
<?php
} else {
?>

<table class="table table-striped">
	<thead>
		<tr>
			<td>No</td>
			<td>Nama Gambar</td>
			<td>Keterangan Gambar</td>
			<td>Preview</td>
			<td>Aksi</td>
		</tr>
	</thead>
	<tbody>

<?php
foreach ($image as $row) {
?>

		<tr>
			<td><?=$i?></td>
			<td><?=$row['nm_img']?></td>
			<td><?=$row['ket_img']?></td>
			<td><img src="<?=base_url()?>assets/img/<?=$row['path_img']?>" style="max-width:200px;"></td>
			<td>
				<button type="button" class="btn btn-success tombol"
				data-toggle="modal"
				data-target="#editDataModal"
				data-id="<?=$row['id']?>"
				data-nama="<?=$row['nm_img']?>"
				data-keterangan="<?=$row['ket_img']?>"
				data-path="<?=$row['path_img']?>"
				><span class="glyphicon glyphicon-pencil"></span></button>

				<button type="button" class="btn btn-danger tombol"
				data-toggle="modal"
				data-target="#hapusDataModal"
				data-id="<?=$row['id']?>"
				data-path="<?=$row['path_img']?>"
				data-baseurl="<?=base_url()?>"
				><span class="glyphicon glyphicon-trash"></span></button>
			</td>
		</tr>

<?php
$i++;	
}
?>

	</tbody>
</table>

<?php } ?>

</div>



<!-- Tambah Data Gambar -->
<div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data Gambar</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?=base_url()?>image/insertImage" enctype="multipart/form-data">
            <div class="form-group">
		      	<label for="nama">Nama Gambar</label>
		      	<input class="form-control" type="text" name="nama" placeholder="Nama Gambar" required>
		    </div>
		    <div class="form-group">
		      	<label for="caption">Caption</label>
		      	<input class="form-control" type="text" name="keterangan" placeholder="Caption" required>
		    </div>
		    <div class="form-group">
		      	<label for="gambar">Image</label>
		      	<input class="form-control" type="file" name="gambar" required>
		    </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Edit Data Gambar -->
<div class="modal fade" id="editDataModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Data Gambar</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?=base_url()?>image/editImage" enctype="multipart/form-data">
            <div class="form-group">
		      	<label for="nama">Nama Gambar</label>
		      	<input class="form-control nm-img" type="text" name="nama" placeholder="Nama Gambar" required>
		    </div>
		    <div class="form-group">
		      	<label for="caption">Caption</label>
		      	<input class="form-control ket-img" type="text" name="keterangan" placeholder="Caption" required>
		    </div>
		    <div class="form-group">
		      	<label for="gambar">Image</label>
		      	<input class="form-control" type="file" name="gambar">
		    </div>
            
      </div>
      <div class="modal-footer">
      	<input class="id" type="hidden" name="id">
      	<input class="path" type="hidden" name="path">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Edit</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Hapus Data Image -->
<div class="modal fade" id="hapusDataModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus Data Gambar</h4>
      </div>
      <div class="modal-body">
        	<div class="view-image text-center"></div> 
        	<br/>
          	<div class="text-delete text-center"></div>
      </div>
      <div class="modal-footer">
        <form method="post" action="<?=base_url()?>image/deleteimage">
            <input class="id" type="hidden" name="id">
            <input class="path" type="hidden" name="path">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>




