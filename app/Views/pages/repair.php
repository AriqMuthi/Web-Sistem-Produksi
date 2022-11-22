<?= $this->extend('layout/layout'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="mt-4 col-7 mx-auto">
            <!-- Form judul -->
            <div class="border p-3 rounded-3 bg-light">
            <div class="alert alert-warning text-lg-center">
                <h2>Input Data Repair</h2>
                <p>Form untuk input data repair, Silahkan isi dengan teliti!</p>
            </div>
            <!-- Form isian -->
            <form action="#" method="post">
                <div class="form-group">
                    <label for="produksi">Tanggal Repair</label>
                    <input type="date" class="form-control" id="produksi">
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="crate">Kotak</label>
                            <input type="text" class="form-control" id="crate" placeholder="Masukan kode kotak">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="produk">Produk</label>
                            <input type="text" class="form-control" id="produk" placeholder="Masukan kode produk">
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="tproduksi">Total Produk Repair</label>
                    <input type="text" class="form-control" id="tproduksi" placeholder="Masukan total produk">
                </div>
                <!-- Form tombol -->
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                <button type="reset" class="btn btn-danger mt-3">Hapus</button><br><br>
                <small bg-color="grey">Ketentuan:<br>*Tombol hapus untuk menghapus data yang sudah di masukan ke form</small>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>