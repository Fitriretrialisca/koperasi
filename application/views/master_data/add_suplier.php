<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Form Tambah Suplier</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->

  <form role="form">
    <div class="card-body">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="id_sup">ID Suplier*</label>
          <input type="id_sup" class="form-control col-md-10" id="id_sup" placeholder="Input ID suplier">
        </div>
        <div class="form-group col-md-6">
          <label for="nm_sup">Nama Suplier*</label>
          <input type="nm_sup" class="form-control col-md-10" id="nm_sup" placeholder="Nama suplier">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <div class="form-group">
            <label>Alamat</label>
              <input type="alamat" class="form-control col-md-10" id="alamat" placeholder="Isikan alamat suplier">
          </div>
        </div>
        <div class="form-group col-md-6">
          <div class="form-group">
            <label>Kota*</label>
              <select class="form-control select2 col-md-10" >
                <option selected="selected">Surabaya</option>
                <option>Malang</option>
                <option>Gresik</option>
              </select>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="telp">Telepon*</label>
          <input type="telp" class="form-control col-md-10" id="telp" placeholder="No Telepon">
        </div>
        <div class="form-group col-md-6">
          <label for="email">Email</label>
          <input type="email" class="form-control col-md-10" id="email" placeholder="Isikan email suplier">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="fax">Fax</label>
          <input type="fax" class="form-control col-md-10" id="fax" placeholder="">
        </div>
        <div class="form-group col-md-6">
          <label for="pkp">PKP</label>
          <input type="pkp" class="form-control col-md-10" id="pkp" placeholder="">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nppkp">NPPKP</label>
          <input type="nppkp" class="form-control col-md-10" id="nppkp" placeholder="">
        </div>
        <div class="form-group col-md-6">
          <label for="npwp">NPWP</label>
          <input type="npwp" class="form-control col-md-10" id="npwp" placeholder="">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
            <div class="form-group">
              <label>Status</label>
                <select class="form-control select2 col-md-10" >
                  <option selected="selected">Aktif</option>
                  <option>Tidak Aktif</option>
                </select>
            </div>
        </div>
      </div>
    </div>
</form>

  <!-- /.card-body -->
  <div class="card-footer">
    <a href="<?php echo base_url('master_data/list_suplier') ?>" class="nav-link">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </a>
  </div>
</div>
