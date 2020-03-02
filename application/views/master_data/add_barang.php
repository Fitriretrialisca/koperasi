<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Form Tambah Barang</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->

  <form role="form">
    <div class="card-body">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="barcode">Barcode*</label>
          <input type="barcode" class="form-control col-md-10" id="barcode" placeholder="Input barcode">
        </div>
        <div class="form-group col-md-6">
          <label for="nm_barang">Nama barang*</label>
          <input type="nm_barang" class="form-control col-md-10" id="nm_barang" placeholder="Nama barang">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <div class="form-group">
            <label>Golongan</label>
              <select class="form-control select2 col-md-10" >
                <option selected="selected">ATK</option>
                <option>Makanan</option>
                <option>Minuman</option>
                <option>Bahan Poko</option>
              </select>
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="stockMin">Stock Minimal*</label>
          <input type="stock_min" class="form-control col-md-10" id="stock_min" placeholder="Stock minimal">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="harga_beli">Harga beli*</label>
          <input type="harga_beli" class="form-control col-md-10" id="harga_beli" placeholder="Harga beli">
        </div>
        <div class="form-group col-md-6">
          <label for="harga_jual">Harga jual</label>
          <input type="harga_jual" class="form-control col-md-10" id="harga_jual" placeholder="Stock minimal">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="konsiyansi">Konsinyasi</label>
          <input type="konsiyansi" class="form-control col-md-10" id="konsiyansi" placeholder="">
        </div>
        <div class="form-group col-md-6">
          <label for="biji_per_karton">Biji per karton</label>
          <input type="biji_per_karton" class="form-control col-md-10" id="biji_per_karton" placeholder="">
        </div>
      </div>
      <div class="form-group col-md-6">
        <div class="form-group">
          <label>Satuan</label>
            <select class="form-control select2 col-md-10" >
              <option selected="selected">Biji</option>
              <option>Kg</option>
              <option>Helai</option>
              <option>Krat</option>
            </select>
        </div>
      </div>
    </div>
  </form>

  <!-- /.card-body -->
  <div class="card-footer">
    <a href="<?php echo base_url('master_data') ?>" class="nav-link">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </a>
  </div>
</div>
