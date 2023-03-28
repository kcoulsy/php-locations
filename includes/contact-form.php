<?php $has_contact_form = true ?>
<div class="m-3">
    <h2 class="mb-0">Quick Enquiry</h2>
    <p class="lead mb-4 mt-1">Leave a few details to discover how we can help.</p>
    <div class="card p-3 mt-3">
        <form id="contact-form" method="post" action="submit-form">
            <div class="form-group">
                <label for="form-name">Name</label>
                <input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="30" class="form-control" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="form-email">Email address</label>
                <input type="text" name="email" class="form-control" id="form-email"  placeholder="Enter Email" required />
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="form-phone">Phone</label>
                <input type="text" name="phone" class="form-control" id="form-phone" placeholder="Enter Phone Number" required/>
            </div>
            <div class="form-group">
                <label for="form-message">Message</label>
                <textarea class="form-control" name="message" id="form-message" rows="3" placeholder="Enter Message"></textarea>
            </div>
            <input type="text" class="d-none" name="site_location" id="site_location" value="<?= $url_string ?>" />
            <input type="hidden" name="recaptcha_value" id="recaptcha_value"  value="" />
            <button type="submit" id="submit-form" class="btn btn-primary">Submit Form</button>
        </form>
        <div id="contact-error-alert" class="alert alert-danger mt-2 mb-0" role="alert">
            Something went wrong when submitting the form!
        </div>

        <div id="contact-success-alert" class="alert alert-primary mt-2 mb-0" role="alert">
            Form Submitted Successfully!
        </div>
    </div>
</div>