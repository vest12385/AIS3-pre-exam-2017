<?php
// flag1: AIS3{Cute_Snoopy_is_back!!?!?!!?}


// disabled for security issue
$blacklist = ["http", "ftp", "data", "zip"];
foreach ($blacklist as &$s)
    stream_wrapper_unregister($s);

$FROM_INCLUDE = true;

$pages = array(
    // disabled
    // "uploaddddddd" => "Uploads",
    "about" => "About"
);

if (isset($_GET["p"]))
    $p = $_GET["p"];
else
    $p = "home";


if(strlen($p) > 100)
{
    die("parameter is too long");
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
include "header.php";
include $p . ".php";
?>
<footer class="footer">
    <p>© cebrusfs 2017</p>
</footer>
</body>
</html>
