<?php
function test_input($data) {
    global $erro;
    if (!empty($data))
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    else
    {
        $erro += 1;
    }
  }
?>