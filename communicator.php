<?php
$server='localhost';
$user='root';
$pass='';
$db='craftinimages';
$conn=mysqli_connect($server,$user,$pass,$db);
if(!$conn){
    echo "not connected";
}
echo "you are registered successfully!  proceed for payment";
session_start();
$first = $_POST['first'];
$last = $_POST['last'];
$age = $_POST['age'];
$city = $_POST['city'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$specialization = $_POST['specialization'];
$college = $_POST['college'];
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder ="users/". $filename;
        //echo $folder;
move_uploaded_file($tempname,$folder);
$type = $_POST['internshiptype'];
$Category = $_POST['category'];

    $sql="INSERT INTO virtualcommunicator (first,last,age,city,email,phone,specialization,college,image,type,category) VALUES ('".$first."','".$last."','".$age."','".$city."','".$email."','".$phone."','".$specialization."','".$college."','".$folder."','".$type."','".$Category."')";
    $data=mysqli_query($conn,$sql);
    
if($data == 1){
    //echo "New record created successfully";
}
    else{
        echo "Error:  " . $sql . "<br>" . $conn->error;
    }
        

if($Category=='Graduate')
{
    $amount='https://rzp.io/i/nVz61bj';
    
}   
if($Category=='postGraduate')
{
    $amount='https://rzp.io/i/ac8Jifr';
}   
if($Category=='Professional')
{
    $amount='https://rzp.io/i/WCUwowi';
}   

    
mysqli_close($conn);
?>
<html>
    <head><meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Craftin Images</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    
    
    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet" >
    
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" >
    <link rel="stylesheet" href="css/owl.theme.css" >
    <link rel="stylesheet" href="css/owl.transitions.css" >

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="css/color/green.css">
    
    
    
    <!-- Colors CSS -->
     <link rel="stylesheet" type="text/css" href="css/color/blue.css" title="blue">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
    
    <!-- Modernizer js -->
    <script src="js/modernizr.custom.js"></script>

    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 

        <style>
        center{
            margin: 100px;
        }
    </style>

    </head>
    <body>
        <center>
            
        <button><a href="<?php echo $amount?>">pay now</a></button>
        </center>
    </body>
</html>
