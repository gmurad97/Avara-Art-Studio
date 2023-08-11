<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Topbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Statement &RightArrow; Edit</h6>
    </div>
    <div class="card-body">
        <style>
            .file_upload_block {
                width: 100%;
                height: 400px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                border: 1px solid #B2BEB5;
                border-radius: 6px;
                font-size: 64px;
                transition: background-color 128ms linear, color 128ms linear;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
                color: #2d3436;
                cursor: pointer;
            }

            .file_upload_block:hover {
                background-color: rgba(178, 190, 181, 0.3);
            }
        </style>
        <form action="<?php echo base_url('statement_edit_action'); ?>" method="POST" enctype="multipart/form-data">
            <h3 class="bg-gradient-warning text-center text-white mb-3 py-2 rounded"><b>Statement</b></h3>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="statement_img"><b>Image Upload</b></label>
                        <input type="file" name="input_statement_img" id="statement_img" hidden>
                        <div class="file_upload_block" style="background-image: url('<?php echo base_url('file_manager/statement/') . $statement['s_img']; ?>');">
                            <i class="fas fa-pen fas-js"></i>
                        </div>
                        <script>
                            document.querySelector("#statement_img").addEventListener("change", function() {
                                document.querySelector(".fas-js").classList.replace("fa-plus-circle", "fa-pen");
                                document.querySelector(".file_upload_block").style.backgroundImage = `url("${URL.createObjectURL(document.querySelector("#statement_img").files[0])}")`;
                                document.querySelector(".file_upload_block").style.color = "#ffffff";
                            });
                            document.querySelector(".file_upload_block").addEventListener("click", function() {
                                document.querySelector("#statement_img").click();
                            });
                        </script>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="statement_title"><b>Statement title</b></label>
                                <textarea name="input_statement_title" id="statement_title" rows="16" class="form-control"><?php echo $statement["s_title"]; ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-warning mt-3"><b>Edit</b></button>
        </form>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>