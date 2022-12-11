<?= $this->extend('layout/layout_admin'); ?>
    <?= $this->section('content_admin'); ?>
        <div class="container">
            <div class="row">
                <div class="col"><br>

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
                                <th scope="col">Total</th>
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
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>