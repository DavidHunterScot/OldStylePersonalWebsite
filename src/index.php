<?php

$page_title = "Home";
$background = "/assets/images/space-stars.gif";
$color = "white";

$page_content = function()
{
?>

<center>
  <p><img src="/assets/images/welcome.gif"></p>
  
  <p><img src="/assets/images/under-construction-flashing-sign.gif"></p>
  <p><img src="/assets/images/welcome-to-my-homepage.gif"></p>
</center>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
