<?php
function createFeedBack($connection, $SQLphrase)
{    
  mysqli_query($connection, $SQLphrase);
}