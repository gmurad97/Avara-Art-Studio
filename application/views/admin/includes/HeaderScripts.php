<?php if (!$this->session->userdata("adm_auth")) {
    $this->session->set_flashdata("adm_auth_error", "You do not have permission for this operation!");
    redirect(base_url('admin_x567'));
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Avara Art Studio</title>
    <link rel="shortcut icon" href="<?php echo base_url('public/assets/admin/img/favicon.ico'); ?>" type="image/x-icon">
    <link href="<?php echo base_url('public/assets/admin/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?php echo base_url('public/assets/admin/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">