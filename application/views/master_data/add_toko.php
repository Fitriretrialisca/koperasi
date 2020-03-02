<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Form Tambah Toko</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->

  <form role="form">
    <div class="card-body">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="id_toko">ID Toko*</label>
          <input type="id_toko" class="form-control col-md-10" id="id_toko" placeholder="Input ID toko">
        </div>
        <div class="form-group col-md-6">
          <label for="nm_toko">Nama Toko*</label>
          <input type="nm_toko" class="form-control col-md-10" id="nm_toko" placeholder="Nama toko">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <div class="form-group">
            <label>Alamat*</label>
              <input type="alamat" class="form-control col-md-10" id="alamat" placeholder="Isikan alamat">
          </div>
        </div>
        <div class="form-group col-md-6">
          <div class="form-group">
            <label>Nama CP*</label>
              <input type="nm_cp" class="form-control col-md-10" id="nm_cp" placeholder="Isikan nama CP">
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <div class="form-group">
            <label>Telepon*</label>
              <input type="telp" class="form-control col-md-10" id="telp" placeholder="Isikan no telepon">
          </div>
        </div>
        <div class="form-group col-md-6">
          <div class="form-group">
            <label>Email*</label>
              <input type="email" class="form-control col-md-10" id="email" placeholder="Isikan email toko">
          </div>
        </div>
      </div>
    </div>
  </form>

  <!-- /.card-body -->
  <div class="card-footer">
    <a href="<?php echo base_url('master_data/list_toko') ?>" class="nav-link">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </a>
  </div>
</div>
