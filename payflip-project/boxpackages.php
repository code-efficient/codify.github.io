<DOCTYPE! html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>payflip</title>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link rel="stylesheet" href="./styles.css">
  <link rel="stylesheet" href="styles/other-style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>


  <!----------------------------------------NAVIGATION-------------------------------------------------------------------------------------->

  <nav>
    <div class="container nav__container">

      <div class="back__button">
        <a href="index.php"><button><i class="uil uil-arrow-left"></i></button> </a>
      </div> 




      <a href="index.php" class="nav__logo">Payflip</a>

      
      
      
      

    </div>


   

    
  </nav>




  
  





  <center>
    <h3 class="email--text">Make sure to fill in your correct Email-address before proceeding..</h3>
  </center>


  
  <center>
      <div class="updates">Our telegram channel!!!....

      <a href="remarkpage.php"><button class="update-btn">Click here to join</button></a>
      </div>
    </center>




  <!---------------------------------------BOX PACKAGES-------A------------------------------------------------------------------------------>



<div class="boxpack__container">
  
  <form id="paymentForm">


    <div class="form-group">
      <input class="email-container" type="email" id="email-address" required placeholder="Email Required" />
    </div>

    <script src="https://js.paystack.co/v1/inline.js"></script>
    <button type="submit" onclick="payWithPaystack()" class="boxA">bOx-A<br>#50</button>
  </form>


<!---------------------------------------BOX PACKAGES----B--------------------------------------------------------------------------------->


  <form id="paymentForm2">


    <div class="form-group">
      <input class="email-container" type="email" id="email-address2" required placeholder="Email Required" />
    </div>


    <script src="https://js.paystack.co/v1/inline.js"></script>
    <button type="submit" onclick="payWithPaystack2()"  class="boxA">bOx-B<br>#100</button>
  </form>
  

  <!---------------------------------------BOX PACKAGES------------C------------------------------------------------------------------------->


  <form id="paymentForm3">


    <div class="form-group">
      <input class="email-container" type="email" id="email-address3" required placeholder="Email Required" />
    </div>


    <script src="https://js.paystack.co/v1/inline.js"></script>
    <button type="submit" onclick="payWithPaystack3()" class="boxA">bOx-C<br>#200</button>
  </form>


  <!---------------------------------------BOX PACKAGES-----------D-------------------------------------------------------------------------->


  <form id="paymentForm4">


    <div class="form-group">
      <input class="email-container" type="email" id="email-address4" required placeholder="Email Required" />
    </div>


    <script src="https://js.paystack.co/v1/inline.js"></script>
    <button type="submit" onclick="payWithPaystack4()"  class="boxA">bOx-D<br>#500</button>
  </form>
  
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
