$(document).ready(function () {
  var $contactForm = $("#contact-form");

  var $successAlert = $("#contact-success-alert");
  var $failAlert = $("#contact-error-alert");

  $successAlert.hide();
  $failAlert.hide();

  var $fakeFieldTitle = $contactForm.find("input#title");
  var $nameField = $contactForm.find("input#name");
  var $emailField = $contactForm.find("input#form-email");
  var $phoneField = $contactForm.find("input#form-phone");
  var $messageField = $contactForm.find("textarea#form-message");
  var $siteLocationField = $contactForm.find("input#site_location");
  var $recaptchaField = $contactForm.find("input#recaptcha_value");
  var $submitButton = $contactForm.find("button#submit-form");

  function hideAlert() {
    $successAlert.fadeOut();
    $failAlert.fadeOut();
  }

  $fakeFieldTitle.on("keydown", hideAlert);
  $nameField.on("keydown", hideAlert);
  $emailField.on("keydown", hideAlert);
  $phoneField.on("keydown", hideAlert);
  $messageField.on("keydown", hideAlert);

  window.submitForm = function () {
    hideAlert();

    if ($fakeFieldTitle.val()) {
      $failAlert.fadeIn();
      return;
    }

    var submittingHtml =
      '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...';

    $submitButton.html(submittingHtml);
    $submitButton.prop("disabled", true);

    $.post($contactForm.attr("action"), {
      name: $nameField.val(),
      email: $emailField.val(),
      phone: $phoneField.val(),
      message: $messageField.val(),
      site_location: $siteLocationField.val(),
      recaptcha_value: $recaptchaField.val(),
    })
      .done(function (data) {
        var res = JSON.parse(data);
        $nameField.val("");
        $emailField.val("");
        $phoneField.val("");
        $messageField.val("");

        if (res.success) {
          $successAlert.fadeIn();
        } else {
          $failAlert.fadeIn();
        }

        $submitButton.html("Submit Form");
        $submitButton.prop("disabled", false);
      })
      .fail(function () {
        $failAlert.fadeIn();
      });
  };
});
