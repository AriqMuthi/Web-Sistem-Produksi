<?= $this->extend('layout/layout_qc'); ?>
    <?= $this->section('content_qc'); ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="m-3 col-7 mx-auto">
                        <!-- Form judul -->
                        <div class="border p-3 rounded-3 bg-light">
                            <div class="alert alert-primary text-lg-center">
                                <h2>Validasi data Produksi</h2>
                                <p>Form untuk validasi data produksi dan sortir QC, Silahkan isi dengan teliti!</p>
                            </div>
                            <?php if (session()->getFlashdata('pesan')): ?>
                            <div class="alert alert-danger text-lg-center">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                            <?php endif; ?>
                            <!-- Form isian -->
                            <form action="/data_qc/save/<?= $produk['id']; ?>" method="post">
                                <!-- agar input data hanya bisa dari halaman ini -->
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produksi">Tanggal Produksi</label>
                                            <input type="date" value="<?= $produk['created_at']; ?>"
                                                class="form-control" id="produksi" disabled name="tgl" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="crate">Kotak</label>
                                            <input type="text" class="form-control" id="crate"
                                                placeholder="Masukan kode kotak" disabled name="kotak"
                                                value="<?= $produk['kotak']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="produk">Produk</label>
                                    <input type="text" class="form-control" id="produk"
                                        placeholder="Masukan kode produk" disabled name="kode"
                                        value="<?= $produk['kode']; ?>" />
                                </div>

                                <div class="form-group mt-3">
                                    <label for="tproduk">Total Produk</label>
                                    <input type="text" class="form-control" id="tproduk"
                                        placeholder="Masukan kode produk" disabled value="<?= $produk['total']; ?>"
                                        name="tot" />
                                </div>

                                <div class="form-group mt-3">
                                    <label for="tproduksi">Produk Oke</label>
                                    <input type="number" class="form-control" id="tproduksi"
                                        placeholder="Masukan total produk" name="oke" />
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="reject">Reject</label>
                                            <input type="number" class="form-control" id="reject"
                                                placeholder="Masukan total produk" name="reject" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="repair">Repair</label>
                                            <input type="number" class="form-control" id="repair"
                                                placeholder="Masukan total produk" name="repair" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Form tombol -->
                                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                                <button type="reset" class="btn btn-danger mt-3">Batal</button><br><br>
                                <small bg-color="grey">Ketentuan:<br>*Tombol batal untuk menghapus data yang
                                    sudah
                                    di
                                    masukan ke form</small>
                            </form>
                        </div><br><br>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>