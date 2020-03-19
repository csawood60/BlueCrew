<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <title>Contact Us</title>
</head>
<body>
    <div class="container">
        <h1 class="display-3"><strong>Drop us a line<span class="design-dots">.....</span></strong></h1>
        <p class="lead-2"><strong>​Reach out anytime. We love to chat!</strong></p>
        <p>Contact us to chat or to set up a free consultation.<br>
        What amazing projects are you working on?<br>
        Share your aspirations with us and we will happily sit down together to hear more
        about it and to talk about how Blue Ivy can support your initiative.</p>
    </div>
    <div class="container"> <!--Need to make input boxes blue-->
        <form class="needs-validation" action="contactform.php" method="post" novalidate>
            <p><span class="required">*</span>Indicates a Required Field</p>
            <div class="form-group">
                <label for="Name">Name<span class="required">*</span></label>
                <input type="text" class="form-control" name="name" placeholder="Your Name..." required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter your name.</div>
            </div>
            <div class="form-group">
                <label for="Company">Company</label>
                <input type="text" class="form-control" name="company-name" placeholder="Company Name...">
            </div>
            <div class="form-group">
                <label for="Phone-number">Phone Number<span class="required">*</span></label>
                <input type="text" class="form-control" name="phone-number" placeholder="Phone Number..." required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter your phone number.</div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address<span class="required">*</span></label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Your Email..." aria-describedby="emailHelp" required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter your email address.</div>
            </div>
            <div class="form-group">
                <label for="Team-size">Team Size</label>
                <input type="text" class="form-control" name="team-size" placeholder="Team Size...">
            </div>
            <div class="form-group">
                <label for="Message">What's Happening in Your World?</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
        </form>
        <br>
    </div>

    
    <!-- Start of HubSpot Embed Code
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6110584.js"></script>
    End of HubSpot Embed Code -->    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>