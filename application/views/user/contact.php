<?php $this->load->view("user/includes/HeaderScript"); ?>

<body class="centerized-content">
    <div class="contact">
        <iframe class="iframe__maps"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.526878055521!2d49.8403955!3d40.3750139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307da55e09d163%3A0x3054591bee19df63!2zMTMzIMaPbMO2dnPJmXQgUXVsaXlldiBrw7zDp8mZc2ksIEJha8Sx!5e0!3m2!1sru!2saz!4v1682479145579!5m2!1sru!2saz"
            allowfullscreen></iframe>
        <div class="contact-info">
            <div class="contact-info__block">
                <i class="fas fa-map-marker-alt contact-info__fasicon"></i>
                <p class="contact-info__subtitle"><?php echo $contact_data["c_location"]; ?></p>
            </div>
            <div class="contact-info__block">
                <i class="fas fa-phone contact-info__fasicon"></i>
                <p class="contact-info__subtitle"><?php echo $contact_data["c_phone"]; ?></p>
            </div>
            <div class="contact-info__block">
                <i class="fas fa-envelope contact-info__fasicon"></i>
                <p class="contact-info__subtitle"><?php echo $contact_data["c_email"]; ?></p>
            </div>
        </div>
    </div>
</body>

</html>