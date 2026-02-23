<?php
      require_once 'vendor/swiftmailer/lib/swift_required.php';
      //echo("contact_swifter.php");
  if (!empty($_POST["email"])) {
      $zeroEmail = $_POST["email"]; 
  }
  if (!empty($_POST["name"])) {
      $fullName = $_POST["name"]; 
  }
  if (!empty($_POST["phone"])) {
      $zeroPhone = $_POST["phone"];  
 
  }
  if (!empty($_POST["zeroMessage"])) {
      $zeroMessage = $_POST["zeroMessage"];  
  }

      function swiftmailer_configurator() {
          // configure Swift Mailer

          //GoDaddy conig
          //Using relay-hosting.secureserver.net, 
          //port 25 worked beautifully.

          //Swift_DependencyContainer::getInstance()->...
          //Swift_Preferences::getInstance()->...
      }

      Swift::init('swiftmailer_configurator');
      // Create the Transport
      $transport = Swift_SmtpTransport::newInstance('relay-hosting.secureserver.net', 25)
        ->setUsername('bruce.norton@dziin.com')
        ->setPassword('brunoDziin')
        ;
        $mailer = Swift_Mailer::newInstance($transport);
      // Create the message
      $message = Swift_Message::newInstance()

        // Give the message a subject
        ->setSubject('ZeroOhm Contact')

        // Set the From address with an associative array
        ->setFrom(array($_POST["email"] => $_POST["name"]))

        // Set the To addresses with an associative array
        //, 'info@zerohmultispeaker.com' => 'George Dracopoulos'
        ->setTo(array('bruce.norton@gmail.com' => 'Bruce Norton', 'info@zohms.com' => 'George Dracopoulos'))

        // Give it a body
        ->setBody("Hey George<br>".
                  "You've received a message from ZerOhMultispeaker.<br>".
                  "From: $fullName<br>".
                  "Email: $zeroEmail<br>".
                  "Phone: $zeroPhone<br>".
                  "Message: $zeroMessage<br>", "text/html")


        // Optionally add any attachments
        //->attach(Swift_Attachment::fromPath('my-document.pdf'))
        ;
        $result = $mailer->send($message);
        if($result == 1){
          echo("Thank you $fullName. We will contact you shortly at $zeroEmail.");
        }
  ?>