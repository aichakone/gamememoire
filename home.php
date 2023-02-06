<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>

	<title>HOME</title>
	
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory Game</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
<script defer src="script.js"></script>
</head>

<body>
    <div class="head">
        <h2>Memory Game</h2>
        <div class="score">Score: <span>0</span></div>
    </div>

    <div class="container">
        <div class="cell">
            <div class="front" data-index="1"><img src="css/img/1.png" alt=""></div>
            <div class="back"></div>
        </div>
        <div class="cell">
            <div class="front" data-index="1"><img src="css/img/2.png" alt=""></div>
            <div class="back"></div>
        </div>
        <div class="cell">
            <div class="front" data-index="2"><img src="css/img/3.png" alt=""></div>
            <div class="back"></div>
        </div>
        <div class="cell">
            <div class="front" data-index="2"><img src="css/img/4.png" alt=""></div>
            <div class="back"></div>
        </div>
        <div class="cell">
            <div class="front" data-index="3"><img src="css/img/5.png" alt=""></div>
            <div class="back"></div>
        </div>
        <div class="cell">
            <div class="front" data-index="3"><img src="css/img/6.png" alt=""></div>
            <div class="back"></div>
        </div>
        <div class="cell">
            <div class="front" data-index="4"><img src="css/img/7.png" alt=""></div>
            <div class="back"></div>
        </div>
        <div class="cell">
            <div class="front" data-index="4"><img src="css/img/8.png" alt=""></div>
            <div class="back"></div>
        </div>
        <div class="cell">
            <div class="front" data-index="5"><img src="css/img/9.png" alt=""></div>
            <div class="back"></div>
        </div>
        <div class="cell">
            <div class="front" data-index="5"><img src="css/img/10.png" alt=""></div>
            <div class="back"></div>
        </div>
        <div class="cell">
            <div class="front" data-index="6"><img src="css/img/11.png" alt=""></div>
            <div class="back"></div>
        </div>
        <div class="cell">
            <div class="front" data-index="6"><img src="css/img/12.png" alt=""></div>
            <div class="back"></div>
        </div>
    </div>



     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>