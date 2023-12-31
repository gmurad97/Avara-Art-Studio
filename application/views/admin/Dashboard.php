<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Topbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <img width="100%" src="<?php echo base_url('public/assets/admin/img/dashboard_logo.png'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>