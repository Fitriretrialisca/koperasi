<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Form Tambah Kota</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->

  <form role="form">
    <div class="card-body">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="id_kota">ID Kota*</label>
          <input type="id_kota" class="form-control col-md-10" id="id_kota" placeholder="Input ID Kota">
        </div>
        <div class="form-group col-md-6">
          <label for="nm_kota">Nama Kota*</label>
          <input type="nm_kota" class="form-control col-md-10" id="nm_kota" placeholder="Nama kota">
        </div>
      </div>
      </div>
  </form>

  <!-- /.card-body -->
  <div class="card-footer">
    <a href="<?php echo base_url('master_data/list_kota') ?>" class="nav-link">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </a>
  </div>
</div>
