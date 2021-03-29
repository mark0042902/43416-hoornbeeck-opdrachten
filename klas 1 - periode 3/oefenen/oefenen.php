<!Doctype html>
<html>
<body>

    <?php

        $cars = [
            ['brand' => 'Volvo' , 'type' => 'v60'],
            ['brand' => 'Bmw' , 'type' => 'M5'],
            ['brand' => 'Audi' , 'type' => 'RS6'],
            ['brand' => 'Mercedes' , 'type' => 'AMG'],
        ];

        foreach ($cars as $car) { 
            echo $car ['brand'] . $car ['type'] . '<br>';
        }
    ?>

</body>
</html>



( staat wat tussen )
{ } // array    
[ ]