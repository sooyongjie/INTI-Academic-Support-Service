<?php

foreach ($_POST as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

echo "<br>if the page is blank, this shouldn't happen";
