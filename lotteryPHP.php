<?php
    $fp = fopen('lotteryJSON.json', 'w');
    fwrite($fp, json_encode($_POST['his']));
    fclose($fp);
?>
