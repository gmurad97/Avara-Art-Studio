<?php $this->load->view("user/includes/HeaderScript"); ?>

<body class="centerized-content">
    <div class="gallery">
        <?php foreach ($gallery_data as $gallery_data_item) { ?>
            <div class="gallery-wrapper">
                <img src="<?php echo base_url('file_manager/gallery/') . $gallery_data_item['g_img']; ?>" alt="Gallery Image" class="gallery-wrapper__img">
            </div>
        <?php } ?>
    </div>
</body>

</html>