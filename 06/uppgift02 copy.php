<?php
    function area($r)
    {
        $area = pi() * $r * $r;
        $area_round = round($area, 2);
        echo "<h1>Arean av cirkeln är av $area_round m<sup>2</sup><h1>";
    }
    area(1);
?>