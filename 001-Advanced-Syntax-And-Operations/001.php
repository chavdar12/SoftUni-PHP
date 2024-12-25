<?php
$months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
echo ($choice = intval(readline())) >= 1 && $choice <= 12 ? $months[$choice - 1] : "Invalid Month!";