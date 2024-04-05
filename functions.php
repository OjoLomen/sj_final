<?php
    function pridajPozdrav(){
        $hour = date(format: 'H');
        if ($hour < 12){
            echo"<h1>Dobre Rano</h1>";
        } elseif ($hour < 18) {
            echo"<h1>Dobry Den</h1>";
        } else {
            echo"<h1>Dobry Vecer</h1>";
    }
}
?>
