<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Form Tambah Satuan</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->

  <form role="form">
    <div class="card-body">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="id_sat">ID Satuan*</label>
          <input type="id_sat" class="form-control col-md-10" id="id_sat" placeholder="Input ID satuan">
        </div>
        <div class="form-group col-md-6">
          <label for="nm_sat">Nama Satuan*</label>
          <input type="nm_sat" class="form-control col-md-10" id="nm_sat" placeholder="Nama satuan">
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
    <a href="<?php echo base_url('master_data/list_satuan') ?>" class="nav-link">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </a>
  </div>
</div>
