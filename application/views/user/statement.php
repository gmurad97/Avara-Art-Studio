<?php $this->load->view("user/includes/HeaderScript"); ?>

<body class="centerized-content">
    <div class="statement">
        <div class="statement-img">
            <img src="<?php echo base_url('file_manager/statement/').$statement_data['s_img']; ?>" alt="Statement" class="statement-img__img">
        </div>
        <div class="statement-title">
            <p class="statement-title__p">
                <?php echo $statement_data["s_title"]; ?>
            </p>
        </div>
    </div>
</body>

</html>