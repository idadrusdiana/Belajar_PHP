<?php

goto a;
echo "Hello World" . PHP_EOL;

a:
echo "Hello Idad" . PHP_EOL;

//diimplementasikan di perulangan

$counter = 1;

while(true){
    echo "Ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;

    if($counter > 10){
        goto end;
    }
}

end:
echo "end loop" . PHP_EOL;