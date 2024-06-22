<?php
    if (isset($_GET['drink']) && isset($_GET['sugar'])) {
        $drink = $_GET['drink'];
        $sugar = $_GET['sugar'];

        if ($drink == "coffee") {
            if ($sugar == "1") {
                echo "Coffee with sugar!";
            } else {
                echo "Coffee without sugar.";
            }
        } elseif ($drink == "tea") {
            if ($sugar == "1") {
                echo "Tea with sugar!";
            } else {
                echo "Tea without sugar.";
            }
        } else {
            echo "Invalid selection.";
        }
    } else {
        echo "Please select a drink and sugar preference.";
    }
