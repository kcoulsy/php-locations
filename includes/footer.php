

</body>
    <!-- Vendor -->
    <!-- <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://bootswatch.com/_vendor/prismjs/prism.js"></script> -->
    <!-- <script src="https://bootswatch.com/_assets/js/custom.js"></script> -->

    <!-- Theme Custom -->

    <!-- FORM NOT SUBMITTING DELETED THIS DUE TO TESTING -->
    <script src="<?php echo $base_url; ?>assets/js/main.js"></script>
    
    <script src="assets/jquery/jquery.min.js"></script>

    <!-- <script src="assets/js/views/view.contact.js"></script> -->

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