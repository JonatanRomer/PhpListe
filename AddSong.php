<?php
/**
 * Created by PhpStorm.
 * User: Jonatan
 * Date: 11/6/2017
 * Time: 2:25 PM
 */

include 'Music.php';
include 'Data.php';

$Data = array();

function addData(){
    $n1 = $_POST["Snavn"];
    $n2 = $_POST["Aname"];
    $n3 = $_POST["time"];

    $tempAftale = new Music();
    $tempAftale->Snavn = $n1;
    $tempAftale->Anavn = $n2;
    $tempAftale->time = $n3;
    array_push($Data, $tempAftale);
}

php?>






<!--<html>
<body>

Added song: <?php echo $_POST["Sname"]; ?><br>
The artist is: <?php echo $_POST["Aname"]; ?><br>
The lenght od the song is: <?php echo $_POST["time"]; ?>

</body>
</html>


