<?php

    class ElevationCenter {
        public $ATL = 5.5;
        public $NTL = 11;
        public $BTL = 15;
    }

    class ElevationVariance {
        public $ATL = 2;
        public $NTL = 1;
        public $BTL = 1;
    }

    class AspectAdjustments {
        public $E = array( "angle" => 0 );
        public $NE = array( "angle" => -45 );
        public $N = array( "angle" => -90 );
        public $SE = array( "angle" => 45 );
        public $S = array( "angle" => 95 );
        public $NW = array( "angle" => -135 );
        public $W = array( "angle" => 180 );
        public $SW = array( "angle" => 135 );
    }

    $elevationCenter = new ElevationCenter();
    $elevationVariance = new ElevationVariance();
    $aspectAdjustments = new AspectAdjustments();
    
    $startDate = $_POST['start'];
    $endDate = $_POST['end'];

    include('data.php');

    $output = json_encode($avalanches);
    echo $output;