<?php
session_start();

if($_SESSION["name"] == null) {
    ?>
        <Script>
            window.location.assign("lmslogin.php");
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
            window.location.assign("lmslogin.php");
        </script>
    <?php
}
?>