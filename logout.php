<?php
session_start();
if( session_destroy())
{
    header("Location: http://awasthim.dev.fast.sheridanc.on.ca/SafeMedia/index.php");
}


?>