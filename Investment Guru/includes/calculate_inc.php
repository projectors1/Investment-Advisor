<?php 

function cal_amount($conn,$accountID,$priority,$savings,$totalhigh,$totalmid,$totallow) {
    if($priority == 'High') {
        if($totalmid == 0 && $totallow == 0)
            $amount = $savings;
        else
            $amount = (70/100) * $savings;
    }
    else if($priority == 'Mid') {  
            if($totalhigh == 0 && $totallow == 0)
            $amount = $savings;
        else if($totalhigh > 0 && $totallow == 0)
            $amount = (30/100) * $savings;
        else if($totalhigh == 0 && $totallow > 0)
            $amount = (70/100) * $savings;
        else if($totalhigh > 0 && $totallow > 0) {
            $amount = (70/100) * $savings;
            $amount = $savings - $amount;
            $amount = (70/100) * $amount;
        }
    }
    else {
        if($totalhigh == 0 && $totalmid == 0)
            $amount = $savings;
        else if($totalhigh > 0 && $totalmid == 0 || $totalhigh == 0 && $totalmid > 0)
            $amount = (30/100) * $savings;
        else if($totalhigh > 0 && $totalmid > 0) {
            $amount = (70/100) * $savings;
            $amount = $savings - $amount;
            $amount = (30/100) * $amount;
        }
    }  
    
    return $amount;
}

function cal_period($conn,$accountID,$goalID,$cost,$priority,$amount) {
    $period=0;

    if($priority == "High") {
        $query = "SELECT GoalID FROM goal WHERE AccountID = '$accountID' AND Priority = 'High'";
        if($result = mysqli_query($conn,$query)) {
            $rowcount = mysqli_num_rows($result);
            for ($i=0; $i<$rowcount; $i++) {
                $data = mysqli_fetch_assoc($result);
                if($data['GoalID'] == $goalID) {
                    $period = ($i+1) + ((ceil(floatval($cost)/floatval($amount))-1) * $rowcount);
                    break;
                }                
            }
        }
    }
    else if($priority == "Mid") {
        $query = "SELECT MAX(Period) FROM goal WHERE AccountID = '$accountID' AND Priority = 'Mid' AND GoalID < '$goalID'";
        $result = mysqli_query($conn,$query); 
        $data = mysqli_fetch_assoc($result);
        $period = (int)$data['MAX(Period)'] + ceil(floatval($cost)/floatval($amount));
    }
    else if($priority == "Low") {
        $query = "SELECT MAX(Period) FROM goal WHERE AccountID = '$accountID' AND Priority = 'Low' AND GoalID < '$goalID'";
        $result = mysqli_query($conn,$query); 
        $data = mysqli_fetch_assoc($result);
        $period = (int)$data['MAX(Period)'] + ceil(floatval($cost)/floatval($amount));
    }

    return $period;
}

?>