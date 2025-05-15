



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
    background-color: cyan;
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
	   <h2>Login</h2>

    <form action="login.php" method="POST">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit" name="SAVE">Login</button>
        

        </center>
         
            </form>

            <?php 
             include("connection.php");
             if(isset($_POST['SAVE'])){
             	$Username=$_POST['username'];
                $password=$_POST['password'];
                $select="SELECT `username`, `password` FROM `customer` WHERE username='$Username' and password='$password'";
                $query=mysqli_query($conn,$select);
                while($fetch=mysqli_fetch_array($query)){
                	if (is_array($fetch)) {
                		$_SESSION['username']=$fetch['username'];
                		        echo "Login successful! Welcome " . $_SESSION['username'];
                		        header("location:form.php");
    } else {
        echo "Invalid username or password.";
    }                	}
                }
             
            

             ?>

</body>
</html>



