<?php 


function startd(){
exec("lightingd");
}
function getInfo(){
exec("lighting-cli getinfo");
}



?>
