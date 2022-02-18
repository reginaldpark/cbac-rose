<?php

    $avalanches = array();

    /* Query Database */
    require __DIR__ . '/vendor/autoload.php';

    use Google\Cloud\BigQuery\BigQueryClient;

    $projectId = 'cbac-306316';

    $bigQuery = new BigQueryClient([
        'projectId' => $projectId,
    ]);
    $query = <<<ENDSQL
    SELECT
        id,
        estimated_avalanche_date,
        subject,
        destructive_size AS size,
        aspect,
        start_zone_elevation AS elevation,
        IFNULL(trigger, 'Unknown') AS trigger,
        'Low' AS danger,
        IFNULL(LEFT(forecast_zone, 9), 'Unknown') AS zone,
        IFNULL(type, 'Unknown') AS type,
        IFNULL(failure_plane, 'Unknown') AS interface,
        url,
        '' AS random_angle,
        '' AS random_radius
    FROM `cbac-306316.cbac_wordpress.long_avy_table_for_plot`
    WHERE estimated_avalanche_date BETWEEN '$startDate' AND '$endDate';
    ENDSQL;
    $queryJobConfig = $bigQuery->query($query);
    $queryResults = $bigQuery->runQuery($queryJobConfig);

    if ($queryResults->isComplete()) {
        $a = 0;
        $rows = $queryResults->rows();
        foreach ($rows as $row) {
            /* Load Query into Array */
            $avalanches[$a] = array ();
            $avalanches[$a]['avalancheDate'] = $row['estimated_avalanche_date'];
            $avalanches[$a]['size'] = $row['size'];
            $avalanches[$a]['aspect'] = $row['aspect'];
            $avalanches[$a]['elevation'] = $row['elevation'];
            $avalanches[$a]['trigger'] = $row['trigger'];
            $avalanches[$a]['danger'] = $row['danger'];
            $avalanches[$a]['zone'] = $row['zone'];
            $avalanches[$a]['type'] = $row['type'];
            $avalanches[$a]['interface'] = $row['interface'];
            $avalanches[$a]['url'] = $row['url'];
            
            /* Calculate Left and Top Positions */
            $aspect = $avalanches[$a]['aspect'];
            $elevation = $avalanches[$a]['elevation'];
            $aspectDetails = $aspectAdjustments->$aspect;
            $angle = $aspectDetails['angle'];

            $randomAngle = strlen( trim( $row['random_angle'] ) ) ? $row['random_angle']+$angle : mt_rand(-18,18)+$angle;
            $randomHypotenuse = strlen( trim( $row['random_radius'] ) ) ? $row['random_radius']+$elevationCenter->$elevation : mt_rand($elevationVariance->$elevation*-1,$elevationVariance->$elevation)+$elevationCenter->$elevation;
            $radians = $randomAngle*pi()/180;
            $left = cos($radians)*$randomHypotenuse;
            $top = sin($radians)*$randomHypotenuse;

            /* Load Left,Top into Array */
            $avalanches[$a]['left'] = $left;
            $avalanches[$a]['top'] = $top; 
            ++$a;
        }
    } else {
        throw new Exception('The query failed to complete');
    }