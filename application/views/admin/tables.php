<?php $i = 1; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1 class="mt-3">Daftar barang</h1>
        <button type="button" class="btn btn-primary mt-3"  data-toggle="modal" data-target="#modalTambah">Tambah <i class="fas fa-fw fa-plus"></i></button>
        <?php echo $this->session->flashdata('message'); ?>
        <?php echo form_error('nama_barang', '<div class="alert alert-danger mt-3" role="alert">','</div>'); ?>
        <?php echo form_error('merek_barang', '<div class="alert alert-danger mt-3" role="alert">','</div>'); ?>
        <?php echo form_error('jumlah_barang', '<div class="alert alert-danger mt-3" role="alert">','</div>'); ?>
            <div class="table-container">
            
            <table class="table table-striped mt-3" >
                    <tr>
                        <th>#</th>
                        <th>Nama barang</th>
                        <th>Merk barang</th>
                        <th>Jumlah barang</th>
                        <th>Aksi</th>
                    </tr>
                <?php foreach($barang as $br) : ?>
                    <tr>
                        <td><?php echo $i; ?></td>
						<td><?=$br['nama_barang']?></td>
                        <td><?=$br['merek_barang']?></td>
                        <td><?=$br['jumlah_barang']?></td>
                        <td><a href="#"><i class="fas fa-fw fa-edit mr-2 text-success"></i></a>  <a href="#"><i class="fas fa-fw fa-trash mr-2 text-danger"></i></a></td>
                    </tr>
                    <?php $i++; ?>
				        <?php endforeach; ?>
            </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('admin/tables')?>" method="post">
            <div class="form-group">
                <label for="nama_barang">Nama barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
            </div>
            <div class="form-group">
                <label for="merek_barang">Merek barang</label>
                <input type="text" class="form-control" id="merek_barang" name="merek_barang">
            </div>
            <div class="form-group">
                <label for="jumlah_barang">Jumlah barang</label>
                <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>
