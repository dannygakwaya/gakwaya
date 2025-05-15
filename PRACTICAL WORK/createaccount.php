




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
    	body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    text-align: center;
    padding-top: 50px;
}

h2 {
    color: #333;
}

form {
    background-color: greenyellow;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    display: inline-block;
}

label {
    font-weight: bold;
}

input {
    padding: 10px;
    margin: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

button {
    background-color: #5cb85c;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #4cae4c;
}
    

        </style>
</head>
<body>
	<center> 
	   <h2>register</h2>

    <form action="" method="POST">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit" name="SAVE">create account</button>

       

        </center>
         
            </form>
            <?php
             include("connection.php");
             if(isset($_POST['SAVE'])){
                $Username=$_POST['username'];
                $password=$_POST['password'];
                $insert="INSERT INTO `customer`( `username`, `password`) VALUES ('$Username','$password')";
                $query=mysqli_query($conn,$insert);
                if($query==true){
                    // echo "data inserted";
                    header('location:login.php' );
                }



                            }

              ?>

</body>
</html>



