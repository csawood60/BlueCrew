<!-- 
    This is the nav to be used for all pages.
    All pages must be php pages
    Use the <php include('./asset/include/nav.php'); ?> command
 -->
    <div   class="container navheaderWidth">    
        <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: black;">
                    <a class="navbar-brand logo" href="index.php">
                <img src="assets/img/untitled_640_white_2.png" alt="Get Blue Ivy" style="width:150px;">
            </a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
                
            <div class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="nav navbar-nav ml-auto text-uppercase" >
                    <li <?php if ($currentPage === 'index') {echo 'class="active" style=" background-color: rgb(0, 0, 102);"';} ?> class="nav-item" role="presentation"><a class="nav-link gbiBlue" href="./index.php" style="color: #34CCE3;">Home</a></li>                    
                    <li <?php if ($currentPage === 'strategies') {echo 'class="active" style=" background-color: rgb(0, 0, 102);"';} ?> class="nav-item" role="presentation"><a class="nav-link gbiBlue" href="./strategies.php" style="color: #34CCE3;">Strategies</a></li>
                    <li <?php if ($currentPage === 'about') {echo 'class="active" style=" background-color: rgb(0, 0, 102);"';} ?> class="nav-item" role="presentation" ><a class="nav-link gbiBlue" href="./about.php" style="color: #34CCE3;">About Us</a></li>                  
                    <li <?php if ($currentPage === 'events') {echo 'class="active" style=" background-color: rgb(0, 0, 102)"';} ?> class="nav-item" role="presentation"><a class="nav-link gbiBlue" href="./events.php" style="color: #34CCE3;">Events</a></li> 
                    <li <?php if ($currentPage === 'resources') {echo 'class="active" style=" background-color: rgb(0, 0, 102);"';} ?> class="nav-item" role="presentation"><a class="nav-link gbiBlue" href="./resourceshead.php" style="color: #34CCE3;">Resources</a></li>
                    <li <?php if ($currentPage === 'partnerships') {echo 'class="active" style=" background-color: rgb(0, 0, 102);"';} ?> class="nav-item" role="presentation"><a class="nav-link gbiBlue" href="./partnership.php" style="color: #34CCE3;">Partnerships</a></li> 
                    <li <?php if ($currentPage === 'contact') {echo 'class="active" style=" background-color: rgb(0, 0, 102);"';} ?> class="nav-item" role="presentation"><a class="nav-link gbiBlue" href="./contact.php" style="color: #34CCE3;">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
