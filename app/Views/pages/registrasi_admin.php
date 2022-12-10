<?= $this->extend('layout/layout_admin'); ?>
    <?= $this->section('content_admin'); ?>
        <div class="container">
            <div class="row">
                <div class="col"><br>

                    <section>
                        <div class="mask d-flex align-items-center gradient-custom-3">
                            <div class="container">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="card-body p-5">
                                                <h2 class="text-uppercase text-center mb-3">Create an account</h2>

                                                <?php if (session()->getFlashdata('pesan')): ?>
                                                <div class="alert alert-danger text-lg-center">
                                                    <?= session()->getFlashdata('pesan'); ?>
                                                </div>
                                                <?php endif; ?>

                                                <?php if (session()->getFlashdata('err')): ?>
                                                <div class="alert alert-success text-lg-center">
                                                    <?= session()->getFlashdata('err'); ?>
                                                </div>
                                                <?php endif; ?>

                                                <form action="/registrasi_admin/save" method="post">

                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="form3Example1cg">Your
                                                            Name</label>
                                                        <input type="text" id="form3Example1cg"
                                                            class="form-control form-control-lg" name="nama" />
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="form-outline mb-4 col-md-6">
                                                            <label class="form-label"
                                                                for="form3Example3cg">Username</label>
                                                            <input type="text" id="form3Example3cg"
                                                                class="form-control form-control-lg" name="username" />
                                                        </div>

                                                        <div class="form-outline mb-4 col-md-6">
                                                            <label class="form-label"
                                                                for="form3Example4cg">Password</label>
                                                            <input type="password" id="form3Example4cg"
                                                                class="form-control form-control-lg" name="password" />
                                                        </div>
                                                    </div>

                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="form3Example4cdg">Jabatan</label>
                                                        <select class="form-select" id="form3Example4cdg"
                                                            aria-label="Default select example" name="jabatan">
                                                            <option value="1">Produksi</option>
                                                            <option value="2">Quality Control</option>
                                                            <option value="3">Admin</option>
                                                        </select>
                                                    </div>

                                                    <div class="d-flex justify-content-center">
                                                        <input type="submit" value="Register"
                                                            class="btn btn-success btn-block btn-lg gradient-custom-4" />
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>