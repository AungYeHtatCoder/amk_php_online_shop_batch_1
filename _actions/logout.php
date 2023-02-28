<?php 
// logout action
session_start();
session_destroy();
header("Location: ../login_form.php");
// Compare this snippet from _actions\user_update.php: