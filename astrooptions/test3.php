<?php 
 include('phpscripts/connection.php');
//$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
   $sql = "SELECT * FROM `history` WHERE u_id = '1'" ;
$prods = [];
          if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $prods[] = $row;
            
        }
    }
          }
//print_r($prods);

function filter_type($array, $type){
    $f_v = [];
    foreach($array as $ar){
        if($ar['type'] == $type){
            $f_v[] = $ar;
        }
    }
    return $f_v;
}

function filter_date($array, $start_date, $end_date){
    $start_stamp = strtotime($start_date);
    $end_stamp = strtotime($end_date);
//    echo "Start: $start_stamp; End: $end_stamp";
    $f_v = [];
    foreach($array as $ar){
        $test_stamp = strtotime($ar['date']);
//        echo "<br>Main: $test_stamp<br><br>";
        if($test_stamp >= $start_stamp && $test_stamp <= $end_stamp){
            $f_v[] = $ar;
        }
    }
    return $f_v;
}
//print_r(filter_type($prods, "Deposit"));
print_r(filter_date($prods, "17-3-2008", "27-5-2010"));
?>