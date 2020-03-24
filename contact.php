<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <title>Contact Us</title>
</head>
<body>
    <img src="assets/img/bluerect.jpg" alt="blue rectangle" class="blueR">
    <div class="container">
        <div class="row short-row"> 
            <div class="col-sm">
                <h1 class="display-3"><strong>Drop us a line<span class="design-dots">.....</span></strong></h1>
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
        <form class="needs-validation" action="contactform.php" method="post" novalidate>
            <p><span class="required">*</span>Indicates a Required Field</p>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom01">Name</label>
                <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Name..." required>
                <div class="invalid-feedback">Please enter your name.</div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Company Name</label>
                <input type="text" class="form-control" id="validationCustom02" name="company-name" placeholder="Company Name...">
              </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">Email</label>
                      <input type="email" class="form-control" id="validationCustomEmail" name="email" placeholder="Email..." required>
                      <div class="invalid-feedback">Please enter a valid email address.</div>
                  </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom03">Phone Number</label>
                <input type="text" class="form-control" id="phoneNumber" phone="phone-number" placeholder="Phone Number..." required>
                <div class="invalid-feedback">Please provide a 10-digit phone number.</div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom04">Team Size</label>
                <input type="text" class="form-control" id="validationCustom04" name="team-size" placeholder="Team Size...">
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="Message">What's Happening in Your World?</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
          </form>
          
          <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function() {
            'use strict';
            window.addEventListener('load', function() {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            }, false);
          })();
          </script>
    </div>
    <script>
      $('#phoneNumber').inputmask("(999) 999-9999");
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>