
        <?php
            function Clean($string, $min='', $max='')
            {
            $string = strip_tags($string);
            $string = preg_replace("/[^a-zA-Z0-9\+-_# ]/", "", html_entity_decode($string, ENT_QUOTES));
            $string = str_replace(array('\'', '"', '\\', ';', '=', '(', ')', '%'), '', $string);
            $string = filter_var($string, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_LOW);
            $len = strlen($string);
            if((($min != '') && ($len < $min)) || (($max != '') && ($len > $max)))
            {
            return "";
            }
            else
            {
            return $string;
            }
            }
        
        function CleanEmail($email)
            {
            if (filter_var($email,FILTER_VALIDATE_EMAIL)==FALSE)
            {
            // this failed the first check
            return "";
            }
            else
            {
            // this passed the first check
            /* explode out local and domain */
            list($local,$domain)=explode('@',$email);
            $localLength=strlen($local);
            $domainLength=strlen($domain);
            /* check for proper lengths */
            if ( ( $localLength > 0 && $localLength < 65) && ( $domainLength > 3 && $domainLength < 256) && ( checkdnsrr($domain,'MX') || checkdnsrr($domain,'A') ) )
                {
                // this passed the second check for length and domain and dns tests
                return $email;
                }
            else
                {
                // this failed the second check
                return "";
                }
            }
            }
        
        
            
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            //set all variables
            $contactName = $companyName = $phone = $address = $teamSize = $message = "";

            $contactName = Clean($_POST["name"]);
            $companyName = Clean($_POST["company-name"]);
            $phone = Clean($_POST["phone-number"]);
            $emailFrom = Clean($_POST["email"]);
            $teamSize = Clean($_POST["team-size"]);
            $message = Clean($_POST["message"]);
      
            //Write the actual email
            $to = '';
            $subject = "Message From ".$contactName;
            $headers = "From: $emailFrom\r\n";
            $headers .= "Reply-To: $emailFrom\r\n";
            $headers .= "MIME-Version: 1.0 \r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1 \r\n";

            $txt = "Name: ".$contactName."<br>";
            $txt .= "Company Name: ".$companyName."<br>";
            $txt .= "Phone Number: ".$phone."<br>";
            $txt .= "Email Address: ".$emailFrom."<br>";
            $txt .= "Team Size: ".$teamSize."<br>";
            $txt .= "Message: ".$message."<br>";


            mail("steve.wood@ac2cess.com", $subject, $txt, $headers) or die("Error!");
            echo "<p style='text-align: center; font-family: Helvetica; color: #34CCE3;'>Your message has been sent. Thank you for reaching out!<br><a href='../index.php' style='font-family: Helvetica; color: #34CCE3;'> Return to Main Page</a></p>";

            ?>
       
        <?php
        }
    
        
        ?>
