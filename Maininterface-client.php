<?php
  session_start();
  require_once('dataset.php');

   $arrMonths = array('January','February','March','April','May','June','July','August','September','October','November','December');

   date_default_timezone_set('Asia/Manila');
   $todays_date = date("h:i:sa");

 
   
//    echo "<br>";echo "<br>";
//    echo "Current time ";
//    echo "<br>";
//    echo date(" h:iA", $today);

if(isset($_POST['btnProcess'])){
$_SESSION['TotalQtyP'] = $_POST['qtyheads'] * 100;
$_POST['radsize'];

echo $_SESSION['TotalQtyP'];
}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/Maininterface-client.css">
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
<h2 class="text-center">Online Form Reservation</h2>
<form  method="post" action="Maininterface-client-confirmation.php">
<label for="">Month: </label><select name="drpMonths" id="" class="form-control">
<?php
        if(isset($arrMonths)){
            foreach($arrMonths as $key => $value){
                if($value == date('F'))
                echo'<option value"'.$value.'" selected>' .$value. '</option>';
                else
                echo'<option value"'.$value.'">' .$value. '</option>';
            }
        }
        ?>
</select>
<label for="">Day: </label><select name="drpDays" id="" class="form-control">
<?php
        for($i=date('d'); $i<32; $i++){
            if($i == date('d'))
            echo'<option value"'.$i.'" selected>' .$i. '</option>';
            else
            echo'<option value"'.$i.'">' .$i. '</option>';
        }
        ?>
</select>
<label for="">Year: </label><select name="drpYear" id="" class="form-control">
        <?php
        for($x=date('Y'); $x<=date('Y'); $x++){
            if($x == date('Y'))
            echo'<option value"'.$x.'" selected>' .$x. '</option>';
            else
            echo'<option value"'.$x.'">' .$x. '</option>';
        }
        ?>
</select>
        
        <label for="qtyHeads">Number of Heads: </label><input type="number" name="qtyHeads" id="qtyHeads" class="form-control" min="1" max="10" value="<?php echo $totalofHeadsPrice?>"  required>
        <?php
        ?>
        <br>
        <input type="radio" name="radsize" id="radbig" value="Small Cottage ₱<?php // echo number_format($arrPrices[0]['Price1'], 2); ?>" required>
        <label for="radbig">Small Cottage</label>
        <input type="radio" name="radsize" id="radsmall" value="Big Cottage ₱<?php // echo number_format($arrPrices[0]['Price2'], 2); ?>" required>
        <label for="radsmall">Big Cottage</label>
        <br><br>
        <label for="txtTimeF">Enter/Select Time From:</label>
        <input type="time" name="txtTimeF" id="txtTimeF" class="" placeholder="" value="<?php echo date("h:i A");?>" required>
        <br><br>
        <label for="txtTimeT">Enter/Select Time To:</label>
        <input type="time" name="txtTimeT" id="txtTimeT" placeholder="" value="" required>
        <br><br>
        <div class="d-grid gap-2">
        <button type="submit" name="btnProcess" class="btn btn-outline-secondary">Process</button>
        </div>


<?php  
//  if(isset($_POST['btnProcess'])):
//     $quantityheads = $_POST['qtyHeads'];
//     $RCsize = $_POST['radsize'];
//     $DrpMonths = $_POST['drpMonths'];
//     // $DrpDays = $_POST['drpMonths']
//     // $DrpDays = $_POST['drpMonths']
   
//     if($RCsize == "Small Cottage"){
//      $Cprice = 500;
//     }
//     elseif($RCsize == "Big Cottage"){
//      $Cprice = 1000; 
//     }
//     $totalofHeadsPrice = $quantityheads * 100;
?>
<?php// endif ?>
</form>
</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>