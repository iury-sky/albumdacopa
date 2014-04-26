<?php
 session_start();
 unset($_SESSION['email']);
 unset($_SESSION['user_name']);
 unset($_SESSION['user_surname']);
 $logged_in = false;
?>
<script type="text/javascript">
window.location="../index.php";
</script>