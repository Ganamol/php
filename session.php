<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

$_SESSION["favcolor"] = "green";
echo "Session variables are set.";
echo$_SESSION["favcolor"] ;

// session_unset();


// session_destroy();
?>

</body>
</html>