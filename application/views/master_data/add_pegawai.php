<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Form Tambah Pegawai</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->

  <form role="form">
    <div class="card-body">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="id_peg">ID Pegawai*</label>
          <input type="id_peg" class="form-control col-md-10" id="id_peg" placeholder="Input ID pegawai">
        </div>
        <div class="form-group col-md-6">
          <label for="nm_peg">Nama Pegawai*</label>
          <input type="nm_peg" class="form-control col-md-10" id="nm_peg" placeholder="Nama pegawai">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <div class="form-group">
            <label>Useraname*</label>
              <input type="username" class="form-control col-md-10" id="username" placeholder="Isikan username">
          </div>
        </div>
        <div class="form-group col-md-6">
          <div class="form-group">
            <label>Password*</label>
              <input type="password" class="form-control col-md-10" id="password" placeholder="Isikan password">
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <div class="form-group">
            <label>Toko</label>
              <select class="form-control select2 col-md-10" >
                <option selected="selected">Koperasi Pasuruan</option>
                <option>Koperasi Mekar</option>
                <option>Koperasi Mawar</option>
                <option>Koperasi Cahaya</option>
              </select>
          </div>
        </div>
      </div>
    </div>
  </form>

  <!-- /.card-body -->
  <div class="card-footer">
    <a href="<?php echo base_url('master_data/list_pegawai') ?>" class="nav-link">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </a>
  </div>
</div>
