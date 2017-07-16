
<?php
include 'Owner.php';
$user="";
session_start();
$user = $_SESSION['user'];
$owner = new Owner($user);

if(isset($_POST['viewProfile'])){
    $owner->viewProfile();
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Owner Home</title>
    <link rel="stylesheet" type="text/css" href="../css/teachHome.css"/>
</head>
<body>
<div class = "wrpper">
    <h4> You are logged as <?php echo $owner->getName(); ?> </h4>


    <div class = "top-bar">

        <h1>Ravi Costructions</h1>
        <h2>RAVI HEAVY MACHINARY EQUIPMENT TRAINING INSTITUTE</h2

        <div class="main">

            <p><h3><u>Owner's Home</u></h3></p>

            <form action="" method="post">

                <button type ="submit" name="viewProfile">VIEW PROFILE</button>
                <button type ="submit" name="editProfile">EDIT PROFILE</button>

            </form>
        </div>
</body>
</html>