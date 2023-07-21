</body>
<!-- Vendor -->
<!-- <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script> -->
<!-- <script src="https://bootswatch.com/_vendor/prismjs/prism.js"></script> -->
<!-- <script src="https://bootswatch.com/_assets/js/custom.js"></script> -->


<!-- <script src="/assets/jquery/jquery.min.js"></script> -->
<!-- <script src="/assets/js/main.js"></script> -->


<!-- <script src="/assets/js/views/view.contact.js"></script> -->

<?php if (!empty($has_contact_form) && $has_contact_form == true) { ?>

    <script defer src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
    <script>
        var onSubmit = function (token) {
            var input = document.querySelector('[name="recaptcha_value"]');
            if (input) input.value = token;

            // var form = document.getElementById('contact-form');
            window.submitForm();
        };

        var onloadCallback = function () {
            grecaptcha.render('submit-form', {
                'sitekey': '<?php echo $_ENV['RECAPTCHA_SITE_KEY'] ?>',
                'callback': onSubmit
            });
        };
    </script>

<?php } ?>

</html>