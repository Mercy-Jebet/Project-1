<?php include_once ("templates/header.php");?>
<?php include_once ("templates/nav.php")?>
<?php include_once ("templates/footer.php")?>

        
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
        

        <header> <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" color="#0b7f97; " align="center">BETTER HELP</h1>
<h2>
</header>
</h2>
<head>
    <meta charset = "UTF - 8">
    <title>DBT1305 - L</title>
</head>
<body>
    <form>
        Fullname: </br>
        <input type="text" name="fullname"/><br/><br/><br/> 
        Username: </br>
        <input type="text" name="username"/><br/><br/><br/>
        Password:</br> 
        <input type="password" name="password"/><br/><br/><br/>
        Date of Birth:</br>
        <input type="date" name="date of birth"/>/><br/><br/><br/>
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="prefer not to say">Prefer not to say</option>
        </select><br/><br/><br/>
        Bio:</br>
        <textarea rows="5" cols="50" name="bio" placeholder="Enter bio here..."></textarea></br>

        <input type="submit" name="Submit" value="Submit"/>
    </form>
    <footer style="text-align: end; color:aliceblue; background-color: black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">All rights reserved</footer>

</body>
<?php include_once ("templates/heading.php");?>
<?php include_once ("templates/nav.php")?>
<?php include_once ("templates/footer.php")?>