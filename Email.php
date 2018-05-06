  <?php
        $name = $_POST['nameIn'];
        $email = $_POST['emailIn'];
        echo "hello";
        $message = $_POST['message'];
        $from = 'From: max-baker-github.io';
        $to="cleverdog99@gmail.com";
        $subject="Website Contact";

        $body = "From: $name\n E-Mail: $email\n Message:\n $message";

        if ($_POST['submit']) {
            if (mail ($to, $subject, $body, $from)) { 
                echo "<p>Your message has been sent!</p>";
            } else { 
                echo '<p>Something went wrong, go back and try again!</p>'; 
            }
        }
      ?>