<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('dashboard'); ?>">
        <div class="sidebar-brand-text mx-3">Avara Admin</div>
    </a>
    <hr class="sidebar-divider my-0">

    <!-- DASHBOARD MENU START -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('statement_create'); ?>">
            <i class="fas fa-fw fa-address-card"></i>
            <span>Statement</span>
        </a>
    </li>
    <!-- DASHBOARD MENU END -->

    <!-- GALLERY START -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGallery" aria-expanded="true" aria-controls="collapseGallery">
            <i class="fas fa-images xl-text-testimonial"></i>
            <span>Gallery</span>
        </a>
        <div id="collapseGallery" class="collapse" aria-labelledby="headingGallery" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a href="<?php echo base_url('gallery_create'); ?>" style="font-size:14px; font-weight:bold;" class="collapse-item d-flex flex-row justify-content-start align-items-center">
                    <i style="font-size:16px;" class="fas fa-fw fa-plus mr-3"></i>Add Image
                </a>
                <a href="<?php echo base_url('gallery_list'); ?>" style="font-size:14px; font-weight:bold;" class="collapse-item d-flex flex-row justify-content-start align-items-center">
                    <i style="font-size:16px;" class="fas fa-fw fa-list mr-3"></i>Image List
                </a>
            </div>
        </div>
    </li>
    <!-- GALLERY END -->

    <!-- SLIDER GALLERY START -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSlider" aria-expanded="true" aria-controls="collapseSlider">
            <i class="fas fa-images xl-text-testimonial"></i>
            <span>SLIDER</span>
        </a>
        <div id="collapseSlider" class="collapse" aria-labelledby="headingSlider" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a href="<?php echo base_url('slider_create'); ?>" style="font-size:14px; font-weight:bold;" class="collapse-item d-flex flex-row justify-content-start align-items-center">
                    <i style="font-size:16px;" class="fas fa-fw fa-plus mr-3"></i>Add Image
                </a>
                <a href="<?php echo base_url('slider_list'); ?>" style="font-size:14px; font-weight:bold;" class="collapse-item d-flex flex-row justify-content-start align-items-center">
                    <i style="font-size:16px;" class="fas fa-fw fa-list mr-3"></i>Image List
                </a>
            </div>
        </div>
    </li>
    <!-- SLIDER GALLERY END -->


    <!-- DASHBOARD MENU START -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('contact_create'); ?>">
            <i class="fas fa-fw fa-address-card"></i>
            <span>Contact InfORM</span>
        </a>
    </li>
    <!-- DASHBOARD MENU END -->


</ul>