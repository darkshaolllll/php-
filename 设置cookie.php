<?php
setcookie("cooki[three]","cookiethree");
setcookie("cooki[two]","cookietwo");
setcookie("cooki[one]","cookieone");
if (isset($_COOKIE["cooki"]))
  {
  foreach ($_COOKIE["cooki"] as $name => $value)
    {
    echo "$name : $value <br />";
    }
  }//还得搭建
?>