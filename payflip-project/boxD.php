<?php
session_start();
if (!isset($_SESSION["userD"])){
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



<!----------------------------------------CODE TO DISABLE BROWSER BACK BUTTON-------------------------------------------------------------------------------------->

<script type="text/javascript">
  function preback() {window.history.forward();}
  setTimeout("preback()",0);
  window.onunload=function() {null};
</script>




</head>
<body>


  <!----------------------------------------NAVIGATION-------------------------------------------------------------------------------------->

  <nav>
    <div class="container nav__container">

      <div class="back__button">
        <a href="boxpackages.php"><button><i class="uil uil-arrow-left"></i></button> </a>
      </div> 




      <a href="index.php" class="nav__logo">Payflip</a>

      
      
      
      

    </div>

    
  </nav>

  



  <!----------------------------------------HOME====PAGE====CONTAINER-------------------------------------------------------------------------------------->



<div class="boxpac__container">
  <a href="paylogD1.php"><div class="boxpac">bOx-D1</div></a>
  <a href="paylogD2.php"><div class="boxpac">bOx-D2</div></a>
</div>



  <div class="center__seperation">
    <small class="payflip__idea">A Payflip idea.</small>
  </div>



  


  <!----------------------------------------FOOTER -------------------------------------------------------------------------------------->

  <footer class="contact__container">
    <small>For updates follow us on :</small>
      <a class="text1" href="facebook.com">Facebook</a></li>
      
      <a class="text3" href="whatsapp.com">Instagram</a></li>
      <a class="text4" href="titok.com">tiktok</a></li>
  </footer>


  
  <div class="header__bottom">
    <small class="payflip__idea">&copy; 2023 Payflip</small>
  </div>




<script src="main.js"></script>
</body>
</html>
