<?php
while ($row=mysqli_fetch_array($data["SV"])){
    echo "A"; //AA vong lap chay 2 lan
    echo $row["hoten"];
}
    
?>