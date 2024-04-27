<?php
    fscanf(STDIN, "%s", $A);
    if($A == "Sunny") {
        echo "Cloudy";
    } else if($A == "Cloudy") {
        echo "Rainy";
    } else if($A == "Rainy") {
        echo "Sunny";
    }
