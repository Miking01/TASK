<?php
$rechargepin = substr(str_shuffle("012345678901"), 0, 12);
for ($i=0; $i < 200; $i++) { 
    echo "Recharge pin is ", substr(str_shuffle("012345678901"), 0, 12). "<br>";
}