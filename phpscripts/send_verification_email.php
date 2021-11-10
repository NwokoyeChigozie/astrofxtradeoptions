
<?php
include('connection.php');
session_start();
 function test_input($data){
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
 }
function digit_check($string){
    if (preg_match('~[0-9]+~', $string)) {
            return "True";
        }else{ 
        return "False";
             
             }
}
if(isset($_POST['send_v_email'])){ 
    

            $email = mysqli_real_escape_string($link, $_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<div class="alert alert-danger" style="border-radius:3px;text-align:center;background-color:#E23D28;color:#fff;padding:10px 85px;margin-top:0px">E-mail is Invalid</div>';
                exit;
        }
            $vr = bin2hex(openssl_random_pseudo_bytes(7));
            $elapse_at = time() + 86400;
            $sql = "INSERT INTO `user_verification`(`email`,`vr`, `elapse_time`) VALUES ('$email','$vr','$elapse_at')";  
            
            if(mysqli_query($link, $sql)){
             $sql = "SELECT * FROM user_verification WHERE email='$email' AND elapse_time = '$elapse_at'";
            $result = mysqli_query($link, $sql);
            $p_r = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $pr_id = $p_r['id'];
            
            $link = "https://astrofxtradeoptions.com/?vr=" . $vr . "&pri=" . $pr_id . "&email=" . $email . "&et=" . $elapse_at;
            $message = "<div style='background-color:#AFDBF5;padding-top:4px;padding-bottom:20px;border-radius:15px;justify-content: center; '><h3 style='text-align:center;border-radius:10px;padding-top:3px;color:#0018A8'>E-mail Verification</h3><br><br><h4 style='text-align:center;margin-bottom:6px;'>Click <a href='$link' style='color:#0018A8;'>here </a> to verify your E-mail, or copy this link: <span style='background-color:#D3D3D3;padding:4px;border-radius:3px;color:#0018A8'>$link</span> and paste on your browser</h4></div>";

                
            $to = $email;
            $subject = "E-mail Verification";
            $txt = $message;
        //    $headers = array("From $email",
        //    "Reply To: $email", 
        //    "Content-Type: text/html",
        //    "charset=UTF-8\r\n",
        //    "X-Mailer: PHP/" . PHP_VERSION 
        //);
            $headers .= "CC: $email\r\n";
//          $from = "gregoflash05@gmail.com"  
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers .= 'From: AstroFxTradeOptions <support@astrofxtradeoptions.com>' . "\r\n";
            
//        $headers .= 'From: '.$from.' '. "\r\n";
            if(mail($to,$subject,$txt, $headers)){
                echo '<div class="alert alert-danger" style="border-radius:3px;text-align:center;background-color:green;color:#fff;padding:10px 85px;margin-top:0px">E-mail Sent</div>';
            
        }else{
               echo '<div class="alert alert-danger" style="border-radius:3px;text-align:center;background-color:#E23D28;color:#fff;padding:10px 85px;margin-top:0px">Error Occurred while sending email</div>'; 
            }
            }else{
               echo '<div class="alert alert-danger" style="border-radius:3px;text-align:center;background-color:#E23D28;color:#fff;padding:10px 85px;margin-top:0px">Error Occurred while sending email</div>'; 
            }
    
}
?>