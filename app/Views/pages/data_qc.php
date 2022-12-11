<?= $this->extend('layout/layout_qc'); ?>
    <?= $this->section('content_qc'); ?>
        <div class="container">
            <div class="row">
                <div class="col">


                    <?php if (session()->getFlashdata('pesan')): ?>
                    <div class="alert alert-primary text-lg-center">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                    <?php endif; ?>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Kotak</th>
                                <th scope="col">Kode Produk</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Reject</th>
                                <th scope="col">Repair</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $k): ?>
                            <tr>
                                <td>
                                    <?= $k['tgl']; ?>
                                </td>
                                <td>
                                    <?= $k['kotak']; ?>
                                </td>
                                <td>
                                    <?= $k['kode']; ?>
                                </td>
                                <td>
                                    <?= $k['total']; ?>
                                </td>
                                <td>
                                    <?= $k['reject']; ?>
                                </td>
                                <td>
                                    <?= $k['repair']; ?>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="/data_qc/validasi/<?= $k['id']; ?>">Validasi</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>