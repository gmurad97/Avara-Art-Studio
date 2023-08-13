<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Topbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Contact &RightArrow; Edit</h6>
    </div>
    <div class="card-body">
        <form action="<?php echo base_url('contact_edit_action'); ?>" method="POST" enctype="application/x-www-form-urlencoded">
            <h3 class="bg-gradient-warning text-center text-white mb-3 py-2 rounded"><b>Contact</b></h3>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="contact_location">Location</label>
                        <input value="<?php echo $contact['c_location']; ?>" type="text" name="input_contact_location" id="contact_location" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="contact_phone">Phone</label>
                        <input value="<?php echo $contact['c_phone']; ?>" type="text" name="input_contact_phone" id="contact_phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="contact_email">Email</label>
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