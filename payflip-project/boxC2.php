<?php
session_start();
if (!isset($_SESSION["winC2"])){
  header("Location: index.php");
}
?>





<DOCTYPE! html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>payflip</title>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link rel="stylesheet" href="./styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>


  <!----------------------------------------NAVIGATION-------------------------------------------------------------------------------------->

  <nav>
    <div class="container nav__container">
      <a href="index.php" class="nav__logo">Payflip</a>

      
      
      

    </div>

    
  </nav>

  



  <!----------------------------------------HOME====PAGE====CONTAINER-------------------------------------------------------------------------------------->


  <center>
    <div class="notice__text__container">
      <h2 class="notice__text"> NOTICE: If win take a screen-shot of the reward including the serial-number now for verification purpose!!!</h2>
    
    
      <div class="notice-text2-cont">
        <small class="notice__text2">When you click on the claim prize button on the next page it will navigate you to our whatsapp Link where you will be attended to by one of our agents and this is the screenshot you will have to send...else if you dont get the prize no need to do all that just navigate to homepage and try again...</small>
    </div>
    
    </div>





    <!------------CHANGE SERIAL NUMBER HERE---------------->
    <h4 class="serial__number"></h4>
    <div class="box_name">C2
      <br>
      <span class="serial-code"></span></div>

    </center>










  <div class="picture__general__container">

<!------------CHANGE PRIZE PICTURE HERE---------------->

      <div class="win-or-loose__image__container"><img class="win-or-loose__image" src="images/kksjsjshsggagagtssgddyydydyetetw.png"></div>


      <a href="boxlog.php"><div class="proceed__button">proceed </div></a>
  </div>







  
  <div class="header__bottom">
    <small class="payflip__idea">&copy; 2023 Payflip</small>
  </div>




<script src="main.js"></script>
</body>
</html>
