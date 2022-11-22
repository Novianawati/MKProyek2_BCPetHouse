<?php
    session_start();
    session_destroy();
    echo "<script>location='pages/samples/login.html'</script>";
?>