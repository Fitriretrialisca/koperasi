<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Form Tambah Anggota</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->

  <form role="form">
    <div class="card-body">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="id_nip">NIP*</label>
          <input type="id_nip" class="form-control col-md-10" id="id_nip" placeholder="Input ID NIP">
        </div>
        <div class="form-group col-md-6">
          <label for="nik">NIK*</label>
          <input type="nik" class="form-control col-md-10" id="nik" placeholder="Input ID NIK">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <div class="form-group">
            <label>Nama Anggota*</label>
              <input type="nm_anggota" class="form-control col-md-10" id="nm_anggota" placeholder="Isikan nama anggota">
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="alamat">Gender*</label>
          <div class="form-group">
            <div class="radio">
              <label><input type="radio" name="optradio" checked>Laki-Laki</label>
              <label><input type="radio" name="optradio">Perempuan</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="alamat">Alamat*</label>
          <input type="alamat" class="form-control col-md-10" id="alamat" placeholder="Isikan alamat anggota">
        </div>
        <div class="form-group col-md-6">
          <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
          <input class="form-control col-md-10" type="date" value="2011-08-19" id="tgl_lahir">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="tgl_daftar" class="form-label">Tanggal Daftar</label>
          <input class="form-control col-md-10" type="date" value="2011-08-19" id="tgl_daftar">
        </div>
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
    <a href="<?php echo base_url('master_data/list_anggota') ?>" class="nav-link">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </a>
  </div>
</div>
