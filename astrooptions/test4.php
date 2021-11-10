<?php
//$currency = 'USD';
//$url = 'https://bitpay.com/api/rates/'.$currency;
//$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL,$url);
//curl_setopt($ch, CURLOPT_HTTPHEADER, Array("User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.15) Gecko/20080623 Firefox/2.0.0.15") ); 
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//$result= curl_exec ($ch);
//curl_close ($ch);
//$info = json_decode($result, true);
//echo "<pre>";
//print_r($info);
function normalize_amount($input){
    $final_output = "0.00";
    if(!empty($input) && $input != '' && is_numeric($input)){
        $input = round($input, 2);
        
        if(count(explode('.', $input)) < 2){
            $final_output = $input . ".00";
            $final_output = tab_split(explode('.', $final_output)[0]) . '.' . explode('.', $final_output)[1];
            
        }elseif(count(explode('.', $input)) > 2){
            $final_output = explode('.', $input)[0] . ".00";
            $final_output = tab_split(explode('.', $final_output)[0]) . '.' . explode('.', $final_output)[1];
            
        }elseif(count(explode('.', $input)) == 2){
            $final_output = $input;
            $final_output = tab_split(explode('.', $final_output)[0]) . '.' . explode('.', $final_output)[1];
            
        }
    }
    return $final_output;
}

function to_eight($input){
    $final_output = "0.00000000";
    if(!empty($input) && $input != '' && is_numeric($input)){
        $input = round($input, 8);
        if(count(explode('.', $input)) < 2){
            $final_output = $input . ".00000000";
            $final_output = explode('.', $final_output)[0] . '.' . explode('.', $final_output)[1];
            
        }elseif(count(explode('.', $input)) > 2){
            $final_output = explode('.', $input)[0] . ".00000000";
            $final_output = explode('.', $final_output)[0] . '.' . explode('.', $final_output)[1];
            
        }elseif(count(explode('.', $input)) == 2){
            $fi_array = explode('.', $input);
            if(strlen($fi_array[1]) < 8){
                $m_num = 8 - strlen($fi_array[1]);
                $zeros = str_repeat("0",$m_num);
//                echo "<br>Number Diff: $m_num; Zeros = $zeros<br>";
                $final_output = $fi_array[0] . '.' . $fi_array[1] . $zeros;
            }elseif(strlen($fi_array[1]) > 8){
                $sub = substr($fi_array[1],0,8);
                $final_output = $fi_array[0] . '.' . $sub;
            }elseif(strlen($fi_array[1]) == 8){
               $final_output = $input; 
            }
            
        }
    }
    return $final_output;
}


//$t_num = 12.098999999;
//echo to_eight($t_num) . "<br>";

$url='https://bitpay.com/api/rates';
$json=json_decode( file_get_contents( $url ) );
$dollar=$btc=0;
//print_r($json);
foreach( $json as $obj ){
    if( $obj->code=='USD' ){
        $usd=$obj->rate;
    }elseif($obj->code=='ETH'){
        $eth=$obj->rate;
    }
    
}

echo "1 bitcoin=" . $usd . "USD<br />";
echo "1 bitcoin=" . $eth . "ETH<br /><br />";

function usd_to_btc($usd_amount, $btc_to_usd_rate){
    return to_eight($usd_amount / $btc_to_usd_rate);
}

function usd_to_eth($usd_amount, $btc_to_usd_rate, $btc_to_eth_rate){
    $btc_amount = $usd_amount / $btc_to_usd_rate;
    return to_eight($btc_amount * $btc_to_eth_rate);
}

function converting($usd_amount, $btc_to_usd_rate, $btc_to_eth_rate, $currency){
    if($currency == "BTC"){
        return usd_to_btc($usd_amount, $btc_to_usd_rate);
    }elseif($currency == "ETH"){
        return usd_to_eth($usd_amount, $btc_to_usd_rate, $btc_to_eth_rate);
    }
}

$usd_v = 120;
echo "$usd_v USD=" . converting($usd_v, $usd, $eth, "BTC") . "BTC<br />";
echo "$usd_v USD=" . converting($usd_v, $usd, $eth, "ETH") . "ETH<br /><br />";

//echo "1 bitcoin=\$" . $btc . "USD<br />";
//$dollar=1 / $btc;
//echo "10 dollars = " . round( $dollar * 10,8 )."BTC";

?>