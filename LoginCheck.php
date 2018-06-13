<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
if ($_SESSION['isSignedIn'] == true) {
    header("location: cart.html"); // Redirecting To Other Page
} else {
    phpAlert("You need to login to add item to cart")
    header("location: login.php"); // Redirecting To Other Page

}
?>