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

                                                <form>

                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="form3Example1cg">Your
                                                            Name</label>
                                                        <input type="text" id="form3Example1cg"
                                                            class="form-control form-control-lg" />
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="form-outline mb-4 col-md-6">
                                                            <label class="form-label"
                                                                for="form3Example3cg">Username</label>
                                                            <input type="email" id="form3Example3cg"
                                                                class="form-control form-control-lg" />
                                                        </div>

                                                        <div class="form-outline mb-4 col-md-6">
                                                            <label class="form-label"
                                                                for="form3Example4cg">Password</label>
                                                            <input type="password" id="form3Example4cg"
                                                                class="form-control form-control-lg" />
                                                        </div>
                                                    </div>

                                                    <div class="form-outline mb-4">
                                                        <label class="form-label" for="form3Example4cdg">Jabatan</label>
                                                        <input type="text" id="form3Example4cdg"
                                                            class="form-control form-control-lg" />
                                                    </div>

                                                    <div class="d-flex justify-content-center">
                                                        <button type="button"
                                                            class="btn btn-success btn-block btn-lg gradient-custom-4">Register</button>
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