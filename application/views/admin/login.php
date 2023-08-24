<?php if (!$this->session->userdata("adm_auth")) { ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Avara Admin Panel</title>
        <link href="<?php echo base_url('public/assets/admin/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="<?php echo base_url('public/assets/admin/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
    </head>

    <body class="bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 text-uppercase mb-3">Avara Art Studio Admin Panel</h1>
                            </div>
                            <form action="<?php echo base_url('admin_x567_action'); ?>" method="POST" enctype="application/x-www-form-urlencoded">
                                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                <div class="form-group">
                                    <label for="adm_username">Username</label>
                                    <input id="adm_username" type="text" class="form-control" name="input_adm_username">
                                </div>
                                <div class="form-group">
                                    <label for="adm_password">Password</label>
                                    <input id="adm_password" type="password" class="form-control" name="input_adm_password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                            </form>

                            <?php if ($this->session->flashdata("adm_auth_error")) { ?>
                                <div class="alert alert-danger mt-4">
                                    <strong>Error!</strong> <?php echo $this->session->flashdata("adm_auth_error"); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url('public/assets/admin/vendor/jquery/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url('public/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/admin/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/admin/js/sb-admin-2.min.js'); ?>"></script>
    </body>

    </html>

<?php
} else {
    redirect(base_url("dashboard"));
}
?>