<?php
session_start();
// error_reporting(0);
// This function calculate the final price 
function get_price($item,$unitprice,$quantity){
    $total_price = 0;
    
	if($item =='A'){ // Calculate the price of item 'A'
        if($quantity > 0){
            $_SESSION['itemA'] = $quantity;   // Here I have put 'A' quantity value in session.
            
            if($quantity == 1){
                $total_price = $total_price + $quantity*$unitprice;
            }elseif($quantity == 2){
                $total_price = $total_price + $quantity*$unitprice;
            }else{
                if($quantity > 2){
                    $total_price = floor($quantity/3) * 130;
                    $rem = ($quantity%3);
                    if($rem <> 0){
                        if($rem == 2){
                            $total_price = $total_price + ($rem * $unitprice);
                        }else{
                            $total_price = $total_price + $unitprice;
                        }
                    }
                }
            }
            return $total_price;
		}else{
            session_unset($_SESSION['itemA']); // Here, I have removed the session value of A's item quantity is empty
            return $total_price;
        }
    }elseif($item =='B'){ // Calculate the price of item 'B'
        if($quantity > 0){
            if($quantity == 1){
                $total_price = $total_price + $quantity*$unitprice;
            }else{
                if($quantity > 1){
                    $total_price = floor($quantity/2) * 45;
                    $rem = ($quantity%2);
                    if($rem <> 0){
                        $total_price = $total_price + ($rem * $unitprice);
                    }
                }
            }
            return $total_price;
        }else{
            return $total_price;
        }
    }elseif($item =='C'){ // Calculate the price of item 'C'
        if($quantity > 0 ){
            if($quantity == 1){
                $total_price = $total_price + $quantity*$unitprice;
            }elseif($quantity == 2){
                $total_price = $total_price + 38;
            }elseif($quantity == 3){
                $total_price = $total_price + 50;
            }else{
                if($quantity > 3){
                    $total_price = floor($quantity/3) * 50;
                    $rem = ($quantity%3);
                    if($rem <> 0){
                        if($rem == 2){
                            $total_price = $total_price + 38;
                        }else{
                            $total_price = $total_price + $unitprice;
                        }
                    }else{
                         $total_price;
                    }
                }
            }
            return $total_price;
            
        }else{
            return $total_price;
        }
    }elseif($item =='E'){ // Calculate the price of item 'C'
        if($quantity > 0){
            $total_price = $total_price + ($quantity * $unitprice);
        }else{
            $total_price;
        }
        return $total_price;
    }else{

        if($quantity > 0){
            if(isset($_SESSION['itemA'])){
                if($_SESSION['itemA'] > 0 && ($quantity > $_SESSION['itemA'])){
                    $remItemQuamtity = $quantity - $_SESSION['itemA'];
                    $total_price = $total_price + ($_SESSION['itemA']*5) + ($remItemQuamtity*$unitprice);
                }else{
                    $total_price = $total_price + $quantity * $unitprice;
                }
                return $total_price; 
            }
        }else{
            return $total_price;
        }
    } // end of else block

} // end of get_value() function

?>