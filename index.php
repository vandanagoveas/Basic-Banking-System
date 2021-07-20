<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
    <style type="text/css">
    body{
        background-image: linear-gradient(#fff,#d4f6fa);
    }
    
        button{
            position: relative;
    display: inline-block;
    padding: 12px 36px;
    
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 18px;
    letter-spacing: 2px;
    border-radius: 8px;
    background-color: #9cfe9c;
    background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
        }
        #banner_image{
  padding: 200px 900px 150px 0px;
  text-align:top;
  color:#000;
  background:url("img/ggg.jpg") no-repeat center center;
  background-size:cover;

}
.centered {
  position: absolute;
  top: 35%;
  left: 60%;
  transform: translate(-10%, -50%);
  font-weight:bold;
  font-size:300%;
}
        
    </style>

</head>


<body>
    <?php
  include 'navbar.php';
  ?>
  <div id="banner_image">
          <div class="container">
            <div class="centered">Banking is necessary<br>Banks are Not</div>
          </div>
          
       </div>

    <div class="container-fluid">
        <!-- Introduction section -->
        
        <!-- Activity section -->
        <div class="row activity text-center">

            <div class="col-md-12 ">
                <br><br>
                <img src="img/transfer2.jpg" class="float-left">
                <br>
                <div class="position-relative" style="color: green;">
                    <h1>Do The Transaction..!!</h1>
                    <p><b>Switch accounts.</b></p>
                    <p>Here the customers can transfer money from one Account to another</p>
                    
                </div>
                <a href="transfermoney.php" target="_blank"><button>Transfer Money</button></a>
                <div class="col-md-12 ">
                <br><br>
                <img src="img/transhis.jpg" class="float-right">
                <br>
                <br>
                <div class="position-relative" style="color: green;">
                    <h1>View your transactions</h1>
                    <p><b>View all your transactions</b></p>
                    <p>Here the costumers can view all the transactions they have made from their corresponding accounts</p>
        
                </div>
                
                <a href="transactionhistory.php"><button>Transaction History</button></a>
                <br>
                <br>
                

        </div>
    </div>
    
    
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
