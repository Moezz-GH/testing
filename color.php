<?php 






$rgb =[];
for($i = 0 ; $i<3 ; $i++){

    $rgb[$i] = rand(0,1) ? 'FF' : '00';

}
echo '#' . implode('', $rgb) .PHP_EOL ;

