<?php
    session_start();
    session_destroy();
    header("location:../tp_session.php");
?>