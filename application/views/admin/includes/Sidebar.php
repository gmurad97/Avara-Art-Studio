<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('dashboard'); ?>">
        <div class="sidebar-brand-text mx-3">Avara Admin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <style>
        .xl-text-dashboard {
            color: #fbc531 !important;
        }

        .xl-text-logo {
            color: #fd79a8 !important;
        }

        .xl-text-gallery {
            color: #20bf6b !important;
        }

        .xl-text-team {
            color: #2d98da !important;
        }

        .xl-text-about-us {
            color: #ced6e0 !important;
        }

        .xl-text-services {
            color: #cd6133 !important;
        }

        .xl-text-working-hours {
            color: #6a89cc !important;
        }

        .xl-text-price {
            color: #33d9b2 !important;
        }

        .xl-text-testimonial {
            color: #b8e994 !important;
        }

        .xl-text-footer {
            color: #F79F1F !important;
        }
    </style>



    <!-- DASHBOARD MENU START -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt xl-text-dashboard"></i>
            <span>Dashboard</span>
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
                <a href="#" style="font-size:14px; font-weight:bold;" class="collapse-item d-flex flex-row justify-content-start align-items-center">
                    <i style="font-size:16px;" class="fas fa-fw fa-plus mr-3"></i>Add Image
                </a>
                <a href="#" style="font-size:14px; font-weight:bold;" class="collapse-item d-flex flex-row justify-content-start align-items-center">
                    <i style="font-size:16px;" class="fas fa-fw fa-list mr-3"></i>Image List
                </a>
            </div>
        </div>
    </li>
    <!-- GALLERY END -->

    <!-- PRICE START -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-money-bill-wave xl-text-price"></i>
            <span>Price</span>
        </a>
    </li>
    <!-- PRICE END -->

    <!-- ABOUT_US MENU START -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#">
            <i class="fas fa-fw fa-address-card xl-text-about-us"></i>
            <span>About Us</span>
        </a>
    </li>
    <!-- ABOUT_US MENU END -->

    <!-- ABOUT_US MENU START -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#">
            <i class="fas fa-fw fa-address-card xl-text-about-us"></i>
            <span>About Us</span>
        </a>
    </li>
    <!-- ABOUT_US MENU END -->

    <hr class="sidebar-divider d-none d-md-block">

    <!-- SIDEBAR TOGGLE START -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    <!-- SIDEBAR TOGGLE END -->
</ul>