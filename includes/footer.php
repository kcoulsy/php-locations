</body>
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