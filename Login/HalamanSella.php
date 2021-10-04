<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        form{
            border: 3px solid goldenrod;
            margin: auto;
            width: 50%;
            padding: 10px;
            background-color: rgb(105, 89, 68);
            
        }
        .imgContainer{
            text-align: center;
            margin: 24px 0 12px 0;
        }
        img.avatar{
            width: 20%;
            border-radius: 50%;
        }
        .container{
            padding: 10px;
            color: white;
            
        }

        input[type=text] , input[type=password]{
            width: 100%;
            padding: 14px 20px;
            display: inline-block;
            box-sizing: border-box;
        }
        button{
            padding: 14px 20px;
            color: white;
            background-color: chocolate;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
           border-radius: 10px;
        }
         button:hover{
             background-color: burlywood;
         }

        .body {
           
            background-image: url("img/gambar.jpg");
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;

        
        }
            ul {
            list-style-type: none;
            margin: 0;
            padding: 90;
            overflow: hidden;
            background-color: burlywood;
            }

            li {
            float: right;
            }

            li a {
            display: block;
            color: white;
            text-align: center;
            padding: 22px 16px;
            text-decoration: none;
            }

            li a:hover:not(.active) {
            background-color:chocolate;
            }

            .active {
            background-color: chocolate;
            }
            .sella {
            float: left;
            color: white;
            }
    </style>

</head>
<body class="body">
    <header>
        <ul>
            <div class="sella">
            <li><h2>Sella Putri</h2></li>
            </div>
            <li><a href="index.html">CONTACT</a></li>
            <li><a href="service.html">SERVICE</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="home.html">HOME</a></li>
          </ul>
        

    </header>
    <form action="codelogin.php" method="POST">
        <div class="imgContainer">
            <img src="img/avatar.jpeg" alt="avatar" class="avatar">

        </div>

        <div class="container">
            <label for="username">Username</label>
            <input type="text" name="username" id="" placeholder="Enter your username">

            <label for="password">Password</label>
            <input type="password" name="password" id="" placeholder="Password">

            <button type="submit">Login</button>
        </div>

    </form>
</body>
</html>