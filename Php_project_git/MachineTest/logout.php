<center><?php
        session_start();
        session_unset();
        session_destroy();

        echo "Session Logged Out... Redirecting to login page in 3 seconds.";
        header("refresh:3;url=login.html"); // Redirects after 3 seconds
        exit();
        ?></center>