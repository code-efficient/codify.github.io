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



  <script>
    var seconds=0;
      function displayseconds()
      {
        seconds +=1;
        document.getElementById("secondsdisplay").innerText= seconds+"%";
      }
      setInterval(displayseconds,1000);
  
      function redirectpage()
      {
        window.location.href="boxresB6.php";
      }
      setTimeout('redirectpage()',17000);
  </script>




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
    <div class="redirect__container1">
      <div class="redirect__text1">Please wait a sec...
        <br>
        Do not Cancel this page!!!
      </div>
    </div>


    <center>
      <div class="redirect__container">
        <div class="redirect__text" id="secondsdisplay"></div>
      </div>
    </center>
    

  </center> 




  <div class="center__seperation">
    <small class="payflip__idea">A Payflip idea.</small>
  </div> 



  
  <div class="header__bottom">
    <small class="payflip__idea">&copy; 2023 Payflip</small>
  </div>




<script src="main.js"></script>
</body>
</html>
