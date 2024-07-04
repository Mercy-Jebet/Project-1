<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    
    <style>
    div{
        margin:auto;
        background-color:rgb(220, 211, 211);
        text-align: center;
    }
    p{
        margin: 1;
    }
    header{
        background-color:rgb(0, 0, 0);
        padding:0%;
        text-align: center;
        font-size:x-large;
        color:aliceblue;
    }
    footer {
        background-color: #777;
        padding: 10px;
        text-align: center;
        color: white;
    }

</style>
</head>  

<body>
   <header> <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" color="#0b7f97; " align="center">BETTER HELP</h1>
    <div class=""Header>
        
        <h2 id ="menu" align ="middle" style="font-family:'Times New Roman', Times, serif; color: darkgrey; ">
        <a href = "index.html">HOME</a>
        <a href="contact_us.html">CONTACT</a>
        <a href="about.html">ABOUT</a>
        <a href ="form.html">LOGIN</a>
        </h2>
    </div></header>
    <img align="left" src="group.jpg" style="width:500px; height:400px">
    <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:rgb(3, 50, 205);"><u>WELCOME TO BETTER HELP!</u></h2>
    
    <footer style="text-align:end; color:aliceblue; background-color: black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">All rights reserved</footer>
    <?php require_once("form.php"); ?>
    <?php require_once("contact_us,php"); ?>
    <?php require_once
    
   
    
</html>