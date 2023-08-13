<?php $this->load->view("user/includes/HeaderScript"); ?>

<body>
    <nav class="menu">
        <div class="menu-item__top-left">
            <a href="javascript:void(0)" class="menu-item__link" id="top_left_link">
                <img src="<?php echo base_url('public/assets/user/img/navigation/statement.png'); ?>" alt="Statement" class="menu-item__img">
            </a>
        </div>
        <div class="menu-item__top-center">
            <a href="javascript:void(0)" class="menu-item__link" id="top_center_link">
                <img src="<?php echo base_url('public/assets/user/img/logo.png'); ?>" alt="Logo" class="menu-item__img">
            </a>
        </div>
        <div class="menu-item__top-right">
            <a href="http://depop.com/avarastudio" target="_blank" class="menu-item__link" id="top_right_link">
                <img src="<?php echo base_url('public/assets/user/img/navigation/shop.png'); ?>" alt="Shop" class="menu-item__img">
            </a>
        </div>
        <div class="menu-item__bottom-left">
            <a href="javascript:void(0)" class="menu-item__link" id="bottom_left_link">
                <img src="<?php echo base_url('public/assets/user/img/navigation/archive.png'); ?>" alt="Archive" class="menu-item__img">
            </a>
        </div>
        <div class="menu-item__bottom-right">
            <a href="javascript:void(0)" class="menu-item__link" id="bottom_right_link">
                <img src="<?php echo base_url('public/assets/user/img/navigation/contact.png'); ?>" alt="Contact" class="menu-item__img">
            </a>
        </div>
    </nav>
    <div class="slider-container">
        <div class="slider">
            <?php if (count($slider_data) >= 2) { ?>
                <?php foreach ($slider_data as $slider_data_item) { ?>
                    <img src="<?php echo base_url('file_manager/slider/') . $slider_data_item['s_img']; ?>" alt="Slider Image" class="slider__img">
                <?php } ?>
            <?php } else { ?>
                <img src="<?php echo base_url('public/assets/user/img/slider/5a7d311c942a4f9999bfe05ba049fa0d.jpg'); ?>" alt="Slider Image" class="slider__img">
                <img src="<?php echo base_url('public/assets/user/img/slider/a0382d121edd4736a94b6f8b439c8fc4.jpg'); ?>" alt="Slider Image" class="slider__img">
            <?php } ?>
        </div>
    </div>
    <iframe src="" frameborder="0" class="iframe__content" id="iframe_show_link"></iframe>
    <script type="text/javascript">
        const topLeftLink = document.querySelector("#top_left_link");
        const topCenterLink = document.querySelector("#top_center_link");
        const bottomLeftLink = document.querySelector("#bottom_left_link");
        const bottomRightLink = document.querySelector("#bottom_right_link");

        const iFrameShowLink = document.querySelector("#iframe_show_link")

        function activeLinkClear() {
            if (topLeftLink.classList.contains("menu-item__active")) {
                topLeftLink.classList.remove("menu-item__active")
            }

            if (bottomLeftLink.classList.contains("menu-item__active")) {
                bottomLeftLink.classList.remove("menu-item__active")
            }
            if (bottomRightLink.classList.contains("menu-item__active")) {
                bottomRightLink.classList.remove("menu-item__active")
            }
        }

        topCenterLink.addEventListener("click", function() {
            activeLinkClear();
            iFrameShowLink.src = "";
        });

        topLeftLink.addEventListener("click", function() {
            activeLinkClear();
            topLeftLink.classList.toggle("menu-item__active");
            iFrameShowLink.src = "<?php echo base_url('statement'); ?>";
        });

        bottomLeftLink.addEventListener("click", function() {
            activeLinkClear();
            bottomLeftLink.classList.toggle("menu-item__active");
            iFrameShowLink.src = "<?php echo base_url('archive'); ?>";
        });

        bottomRightLink.addEventListener("click", function() {
            activeLinkClear();
            bottomRightLink.classList.toggle("menu-item__active");
            iFrameShowLink.src = "<?php echo base_url('contact'); ?>";
        });
    </script>
</body>

</html>