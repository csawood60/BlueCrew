<!-- 
    This is the nav to be used for all pages.
    All pages must be php pages
    Use the <php include('./asset/include/nav.php'); ?> command
 -->

    <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: black; height: 75px;">
        <div class="container">
            <a class="navbar-brand logo" href="index.php">
                <img src="assets/img/untitled_640_white.png" alt="Get Blue Ivy" style="width:150px;">
            </a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            
        
        <div class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item "role="presentation"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="./strategies.php">Strategies</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="./about.php" >About Us</a></li>                  
                    <li class="nav-item" role="presentation"><a class="nav-link" href="./events.php">Events</a></li> 
                    <li class="nav-item" role="presentation"><a class="nav-link" href="./resourcedetail.php">Resource</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="./benefitBroker.php">Unknown</a></li> 
                    <li class="nav-item" role="presentation"><a class="nav-link" href="./contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
