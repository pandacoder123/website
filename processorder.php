<?php
  // create short carible names
$tireqty = (int) $_POST['tireqty'];
$oilqty = (int) $_POST['oilqty'];
$sparkqty = (int) $_POST['sparkqty'];
$address = preg_replace('?/\t|\R',' ',$_POST['address']);
$document_root = $_SEVER['DOCUMENT_ROOT'];
$date = date('H:i, jS F Y');
?>
<!DOCTYPE html>
<html>
   <head>
     <title>Auto Parts - Oreder Results</title>
  </head>
  <body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order results>
    <?php
      echo "<p>Order Processed at ".date('H:i, jS F Y')."</p>";
      echo "<p>Your order is as follows: </p>";
      
      $totalqty = 0;
      $totalamount = 0.00;
      
      define('TIREPRICE', 100);
      define('OILPRICE', 12);
      define('SPARKPRICE, 5);
      
      $totalqty = $tireqty + $oilqty + $sparkqty;
      echo "<p>Items ordered: ".$totalqty."<br />";
      
      if ($totalqty == 0) {
        echo htmlspecialchars($tireqty).' tires<br />';
        } else {
          if ($oilqty > 0) {
            echo htmlspecialchars($oilqty).' bottles of oil<br />';
          }
           if ($oilqty > 0) {
            echo htmlspecialchars($oilqty).' bottles of oil<br />';
          }
        }
        
        
        $totalamount = $tireqty * TIREPRICE
                     + $oilqty * OILPRICE
                     + $sparkqty * SPARKPRICE;
                     
                     
        echo "Subtotal: $".number_format($totalamount,2)."<br />";
        
        $taxrate = 0.10; 
        $totalamount = $totalamount * (1 + $taxrate);
        echo "Total including tax: $".number_format($totalamount,2)."</p>";
        
        echo "<p>Address to ship to is ".htmlspecialchars($address)."</p>";
        
        $outputstring = $date."/t".$tireqty." tires /t".$oilqty." oil/t"
                        .$sparkqty." spark plugs/t/$".$totalamount
                        ."/t". $address."/n";
        
          
      
   
  
  
  
  </body>

