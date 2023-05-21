<?php
$insert = false;
if(isset($_POST['name']))
{
    //Creation of database
    $server = "localhost";
    $username = "root";
    $password = "";
    
    
    //connection to database
    $connect = mysqli_connect($server, $username, $password);



    //check connection success
    if(!$connect)
    {
        die("There is error in connecting with the database".mysqli_connect_error());
    }


    //collecting the data coming from the post
    $name = $_POST['name'];
    $gender= $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `tripform`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$gender', '$age', '$email', '$phone', '$desc', current_timestamp());";
    
    
    //execute the query
    if($connect->query($sql) == true)
    {
        $insert = true;
    }
    else
    {
        echo "Error : $sql <br> $connect->error";
    }

    $connect->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poltawski+Nowy:ital,wght@1,500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Vollkorn&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="travel.jpg" alt="travel_img">
    <div class="container">
        <h1>Travel Registration form</h1>
        <p>Enter your details to confirm participation</p>
        <?php
        if($insert == true)
        {
            echo "<p class='SubmitMsg'>Thanks for submitting the form, looking forward to see you in person</p>";
        }
        ?>
        <form action="/cwh/index.php" method="post">
            <input type="text" name = "name" id="name"  placeholder="Enter name">
            <input type="text" name="age" id="age" placeholder="Enter age">
            <input type="text" name="gender" id="gender" placeholder="Enter gender"> 
            <input type="email" name="email" id="email" placeholder="Enter mail-id">
            <input type="number" name="phone" id="phone" placeholder="Enter phone number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your information here...."></textarea>
            <div class="button">
                <button type="submit" class="btn">Sumit</button>
                <button type="reset" class="btn">Reset</button>
            </div>
        </form>
    </div>
     <script src="index.js"></script>
     
</body>
</html> 