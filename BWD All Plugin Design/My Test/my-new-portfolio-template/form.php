<?php include 'common-template/header.php';?>
<div class="container-fluid py-5" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form text-center">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="control-group col-sm-6">
                                <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                    required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group col-sm-6">
                                <input type="email" class="form-control p-4" id="email" placeholder="Your Email"
                                    required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
functio ferdaus_form_test(){
    Email.send({
    Host : "smtp.gmail.com",
    Username : "ferdaussk.dev@gmail.com",
    Password : "shhS!bCmHJfyLb3",
    To : 'ferdaussk.dev@gmail.com',
    From : document.getElementByID("email").value,
    Subject : "This is the subject",
    Body : "And this is the body"
}).then(
  message => alert(message)
);
}
</script>
<?php //include 'common-template/footer.php';?>