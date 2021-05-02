<?= $this->extend('template/template_admin_auth');?>

<?= $this->section('content');?>
<main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">
                    <div class="text-center mt-4">
                        <h1 class="h2">Welcome back</h1>
                        <p class="lead">
                            Sign in to enter dashboard
                        </p>
                    </div>
                    <div class="card">
                        <div class="card-body">
                        <?php if (!empty(session()->getFlashdata('msg'))) : ?>
                            <div class="alert alert-warning alert-dismissible" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                                <div class="alert-message">
                                    
                                    <strong>Gagal Masuk!</strong> <?php echo session()->getFlashdata('msg'); ?>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="m-sm-4">
                                <form action="/login/auth" method="post">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control form-control-lg" type="email" name="email"
                                            placeholder="Enter your email" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password"
                                            placeholder="Enter your password" />
                                        <small>
                                        </small>
                                    </div>
                                    <div>
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                                        <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection();?>