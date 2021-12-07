<?php
    function area($r)
    {
    $area = pi() * $r * $r;
    $area_round = round($area, 2);
    echo "Arean av cirkeln är av $area_round m<sup>2</sup>";
    }
    area(1);
?>