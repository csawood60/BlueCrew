<!DOCTYPE html>
<html>
<?php $title = 'Shaping Amazing Workplaces'; ?>
<?php $metaTags = 'contact email reply request'; ?>
<?php $currentPage = 'contact'; ?>

<?php include('assets/include/head.php'); ?>    

<body>
<?php include('assets/include/nav.php');?>

    <div class="container"> 
        <div class="row short-row"> 
            <div class="col-sm">
                <h1 class="display-3 contact-header"><strong>Drop us a line<span class="design-dots">.</span></strong></h1>
                <div class="greenLine4"></div>
                <br>
            </div>
        </div>
    <p class="lead-2"><strong>​Reach out anytime. We love to chat!</strong></p>
    <p>Contact us to chat or to set up a free consultation.<br>
       What amazing projects are you working on?<br>
       Share your aspirations with us and we will happily sit down together to hear more
       about it and to talk about how Blue Ivy can support your initiative.</p>
    </div>

    <div class="container">

                <form id="contact-form" method="post" action="contacthandler.php" role="form">

                    <div class="messages"></div>

                    <div class="controls">
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-3">
                                <label for="form_name">Name<span class="required">*</span></label>
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Name..." required="required"
                                    data-error="Name is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        
                            <div class="form-group col-md-6 mb-3">
                                <label for="form_lastname">Company Name<span class="required">*</span></label>
                                <input id="form_lastname" type="text" name="company-name" class="form-control" placeholder="Company Name..." required="required"
                                    data-error="Company Name is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4 mb-3">
                                <label for="form_email">Email<span class="required">*</span></label>
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Email..." required="required"
                                    data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
        
                            <div class="form-group col-md-4 mb-3">
                                <label for="form_email">Phone Number<span class="required">*</span></label>
                                <input id="phoneNumber" type="text" name="phone-number" class="form-control" placeholder="Phone Number..." required="required"
                                    data-error="Phone Number is required.">
                                <div class="help-block with-errors"></div>
                            </div>
        
                            <div class="form-group col-md-4 mb-3">
                                <label for="form_phone">Team Size</label>
                                <input id="form_phone" type="tel" name="team-size" class="form-control" placeholder="Team Size...">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="form_message">What's Happening in Your World?<span class="required">*</span></label>
                                <textarea id="form_message" name="message" class="form-control" placeholder="Message..." rows="5" required="required"
                                    data-error="Please, leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LeuVfoUAAAAAOQq-eLf0UgTfLQdiUiJAW0sYVfh" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                            <div class="help-block with-errors"></div>
                        </div>


                        <input type="submit" class="btn btn-success btn-send" value="Send message">
                        <p></p>

                    </div>

                </form>

    </div>
    <!-- /.container-->
    
    <?php include('assets/include/foot.php');?>
    
    

    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script>$('#phoneNumber').inputmask("(999) 999-9999");</script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="assets/js/validator.js"></script>
    <script src="assets/js/contact.js"></script>
    </body>
    </html>
    