<!DOCTYPE html>  
<html>  
  
<head>  
    <style>  
        y {  
            font-size: 25px;  
            color: black;  
        }  
  
        form {  
            border: 3px solid #f1f1f1;  
        }  
  
        input[type=text],  
        input[type=password] {  
            \ background-color: white;  
            border: 20px;  
            width: 50%;  
            height: 100%;  
            padding: 12px 20px;  
            margin: 8px 0;  
            display: inline-block;  
            border: 1px solid #ccc;  
            box-sizing: border-box;  
            position: center;  
        }  
  
        button {  
            text-decoration: none;  
            background-color: #72a7ff;  
            border: none;  
            color: black;  
            padding: 15px 20px;  
            width: 100%;  
            font-family: :'Didact Gothic';  
            font-size: 25px;  
            text-align: middle;  
            display: inline-block;  
            margin: 4px 2px;  
            -webkit-transition-duration: 0.2s;  
            transition-duration: 0.4s;  
            cursor: pointer;  
        }  
  
        .button:hover {  
            background-color: #555;  
            color: white;  
        }  
  
        .container {  
            padding: 16px;  
        }  
  
        span.psw {  
            float: right;  
            padding-top: 16px;  
        }  
  
        span.psw {  
            display: block;  
            float: none;  
        }  
    </style>  
</head>  
  
<body>  
    <form name="form1" action="" method="post" enctype="multipart/form-data">  
        <div class="container">  
            <y>   
                <p>  
                    <center> <label for="fname"><b>First Name:</b></label> <input type="text" placeholder="Enter your first name" name="name" required></p>  
                </center>  
                <p>  
                    <center> <label for="ename"><b>Email:</b></label> <input type="text" placeholder="Enter your last name" name="email" required></p>  
                </center>  
				<p>  
                    <center> <label for="ecname"><b>Confirm Email:</b></label> <input type="text" placeholder="Enter your last name" name="confirm-email" required></p>  
                </center>  
                
				<p> <button type="save" name="submit" value="add">Subscribe</button></p> <label>  
  
</label> </y>  
        </div>  
    </form>  
</body>  
</html>  
<?php  
if (isset($_POST['submit'])) {  
    extract($_POST);  
    $servername = "localhost";  
    $username   = "root";  
    $password   = "";  
    $dbname     = "subscribe";  
    // Create connection  
    $conn       = new mysqli($servername, $username, $password, $dbname);  
    // Check connection  
    if ($conn->connect_error) {  
        die("Connection failed: " . $conn->connect_error);  
    }  
    $sql = "INSERT INTO `newsletter` VALUES ('$name','$email','$confirm-email')";  
    if ($conn->query($sql) === TRUE) {  
        header('Location: action.php');  
    } else {  
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }  
    $conn->close();  
}  
?> 