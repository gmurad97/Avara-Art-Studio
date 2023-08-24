<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Topbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Contact &RightArrow; Create</h6>
    </div>
    <div class="card-body">
        <form action="<?php echo base_url('contact_create_action'); ?>" method="POST" enctype="application/x-www-form-urlencoded">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
            <h3 class="bg-gradient-dark text-center text-white mb-3 py-2 rounded"><b>Contact</b></h3>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="contact_location">Location</label>
                        <input type="text" name="input_contact_location" id="contact_location" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="contact_phone">Phone</label>
                        <input type="text" name="input_contact_phone" id="contact_phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="contact_email">Email</label>
                        <input type="text" name="input_contact_email" id="contact_email" class="form-control">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-success"><b>Create / Add</b></button>
        </form>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>