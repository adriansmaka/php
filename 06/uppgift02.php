<?php
    function area($r)
    {
        $area = pi() * $r * $r;
        $area_round = round($area, 2);
    }
    area(1);
?>