<?php
  //  date_default_timezone_set('Asia/Manila');
  //  $todays_date = date("h:i:sa");
  session_start();
  require_once('dataset.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/Maininterface-Confirmation.css">
    <link rel = "shortcut icon" type="image" href="img/ResortPic.png">

    <title>Winesa Reservation System</title>
</head>
<body background = "img/Light blue.jpg" class="Backgroundpic">
<nav class="navbar navbar-expand-lg">
<h1>Winesa Farm Resort</h1>
<div class="NavWords">
<div class="container-fluid">
<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu">
            <a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="LoginAs.php">Logout</a></li>
          </ul>
        </li>

        </div>
    </div>
  </div>
</nav>

<div class="Formfillup">
<h2 class="text-center">Confirmation Form</h2>
<hr>
<form method = "post">
<?php
  echo '<b> Date: '.$_POST['drpMonths'].", ".$_POST['drpDays']." ".$_POST['drpYear'] .'</b>';
  echo '<br> <b> Number of Person: '.$_POST['qtyHeads']." ₱ ".$result1 = $_POST['qtyHeads'] * $arrPrices[0]['Price3'].'</b>';
  echo '<br> <b> Size of Cottage: '.$_POST['radsize'].'</b>';
  if($_POST['radsize'] == "Small Cottage ₱"){
    echo '<b> '. $arrPrices[0]['Price1']. '</b>';
  }
  elseif($_POST['radsize'] == "Big Cottage ₱"){
    echo '<b> '. $arrPrices[0]['Price2']. '</b>';
  }
  $TimeF = $_POST['txtTimeF'];
  echo '<br> <b> Time of in: '.date("h:i A", strtotime($TimeF)).'</b>';
  $TimeT = $_POST['txtTimeT'];
  echo '<br> <b> Time of out: '.date("h:i A", strtotime($TimeT)).'</b>';
  $result2 = $_POST['radsize'];
  $Total = (int)$result1 + (int)$result2;
  echo '<br> <b> The Total of Payment '. $Total .'</b>';
?>
</form>
</div> 
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>