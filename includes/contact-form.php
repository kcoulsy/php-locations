<?php $has_contact_form = true ?>
<div class="m-3">
    <?php if ($error_pos) { ?>
        <div class="alert alert-danger" role="alert">
        Something went wrong when submitting the form!
        </div>
    <?php } ?>

    <?php if ($success_pos) { ?>
        <div class="alert alert-primary" role="alert">
        Form Submitted Successfully!
        </div>
    <?php } ?>
    <h2 class="mb-0">Quick Enquiry</h2>

<p class="lead mb-4 mt-1">Leave a few details to discover how we can help.</p>
    <div class="card p-3 mt-3">
        <form method="post" action="<?php echo $base_url; ?>submit-form">
            <div class="form-group">
                <label for="form-name">Name</label>
                <!-- <input type="text" name="name" data-msg-required="Please enter your name." class="form-control" id="form-name" placeholder="Enter Name" required /> -->
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
            <input type="text" class="d-none" name="site_location" value="<?php echo $url_string ?>" />
            <input type="hidden" name="recaptcha_value"  value="" />
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>