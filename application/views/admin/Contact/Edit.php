<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Topbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">contac &RightArrow; Edit</h6>
        <a onclick="return confirm('Do you really want to remove the logo?');" href="<?php echo base_url('logo_delete'); ?>" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-trash"></i>
            </span>
            <span class="text">Delete</span>
        </a>
    </div>
    <div class="card-body">
    <form action="<?php echo base_url('contact_edit_action'); ?>" method="POST" enctype="application/x-www-form-urlencoded">
           
            <h3 class="bg-gradient-warning text-center text-white mb-3 py-2 rounded"><b>cont</b></h3>
            <?php if ($this->session->flashdata("adm_logo_img_error")) { ?>
                <style>
                    .bg-error-message {
                        background-color: rgba(255, 0, 0, 0.16);
                    }
                </style>
                <h1 class="bg-error-message h6 text-center rounded p-3 mt-4"><?php echo $this->session->flashdata("adm_logo_img_error"); ?></h1>
            <?php } ?>
            <div class="row">
            <div class="col-sm-12">
                    <div class="form-group">
                        <label for="contact_location">contact_location</label>
                        <input value="<?php echo $contact['c_location']; ?>" type="text" name="input_contact_location" id="contact_location" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="contact_phone">contact_phone</label>
                        <input value="<?php echo $contact['c_phone']; ?>" type="text" name="input_contact_phone" id="contact_phone" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="contact_email">contact_email</label>
                        <input value="<?php echo $contact['c_email']; ?>" type="text" name="input_contact_email" id="contact_email" class="form-control">
                    </div>

                </div>
            </div>
            <button type="submit" class="btn btn-block btn-warning"><b>Edit</b></button>
        </form>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>