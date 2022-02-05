<?php

for ($counter = 1; $counter <= 10 ; $counter++) { 
    if ($counter % 2 == 1) {
        continue;
    }
    echo "Counter : $counter" . PHP_EOL;
}