<?php
include('includes/header.php');
include('includes/nav.php');
include('includes/content.php');
?>

    <div class="jumbotron">
        <h1 class="text-center">Home page</h1>
    </div>


<?php

$sql = "SELECT * FROM users";
$result = query($sql);

confirm($result);

$row = fetch_array($result);

echo $row['first_name'];

?>


<?php
include('includes/footer.php');
?>