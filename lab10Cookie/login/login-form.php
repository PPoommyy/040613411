<html>
<head>
<title>login</title>
<style>
        

        form {
            background-color: #28BDA6 ;
            border: 1px solid #ccc;
            padding: 20px;
            width: 400px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color:#00537B ;
            color: #fff;
            padding: 10px 20px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

    </style>
</head>
<body>
<form action="check-login.php" method="POST">
   Username: <input type="text" name="username"><br>
   Password: <input type="password" name="password"><br>
   <input type="submit" value="Login">
</form>
</body>
</html>
