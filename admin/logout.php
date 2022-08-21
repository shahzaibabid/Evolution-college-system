<?php
session_start();

if($_SESSION["name"] == null) {
    ?>
        <Script>
            window.location.assign("signin.php");
        </script>
    <?php
}
else {
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();    
    ?>
        <Script>
            window.location.assign("signin.php");
        </script>
    <?php
}
?>