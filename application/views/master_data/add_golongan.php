<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Form Tambah Golongan</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->

  <form role="form">
    <div class="card-body">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="id_gol">ID Golongan*</label>
          <input type="id_gol" class="form-control col-md-10" id="id_gol" placeholder="Input ID golongan">
        </div>
        <div class="form-group col-md-6">
          <label for="nm_gol">Nama Golongan*</label>
          <input type="nm_gol" class="form-control col-md-10" id="nm_gol" placeholder="Nama barang">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control col-md-10" rows="3" placeholder="Enter ..."></textarea>
          </div>
        </div>
      </div>
    </div>
  </form>

  <!-- /.card-body -->
  <div class="card-footer">
    <a href="<?php echo base_url('master_data/list_golongan') ?>" class="nav-link">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </a>
  </div>
</div>
