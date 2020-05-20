
</body>
    <!-- Vendor -->
    <script src="<?php echo $base_url; ?>libs/popper/popper.min.js"></script>
    <script src="<?php echo $base_url; ?>libs/jquery/jquery.min.js"></script>
    <script src="<?php echo $base_url; ?>libs/bootstrap/js/bootstrap.min.js"></script>

    <!-- Theme Custom -->
    <script src="<?php echo $base_url; ?>libs/js/main.js"></script>

    <?php if (!empty($has_contact_form) && $has_contact_form == true) { ?>

    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $recaptcha_api_key ?>"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('<?php echo $recaptcha_api_key ?>', {action: 'homepage'}).then(function(token) {
            var input = document.querySelector('[name="recaptcha_value"]');
            if (input) input.value = token;
            });
        });
    </script>

    <?php } ?>
</html>