<?php

/* Query Database */
require __DIR__ . '/vendor/autoload.php';

use Google\Cloud\BigQuery\BigQueryClient;

class Data {
    // Properties
    public $dangers;
    public $zones;
    public $sizes;
    public $triggers;
    public $types;
    public $interfaces;

    function __construct() {

        $this->dangers = array("Extreme","High","Considerable","Moderate","Low");
        $this->zones = array("Northwest", "Southeast");
        // $this->sizes = array("");
        // $this->types = array("");
        // $this->interfaces = array("");
        // $this->triggers = array("");
        $this->sizes= $this->getFilter( 'destructive_size' );
        $this->types= $this->getFilter( 'type' );
        $this->interfaces= $this->getFilter( 'failure_plane' );
        $this->triggers= $this->getFilter( 'trigger' );

    }

    function getDangers() {
        return $this->dangers;
    }

    function getZones() {
        return $this->zones;
    }

    function getFilter( $column ) {

        $filter = array();
        $projectId = 'cbac-306316';

        $bigQuery = new BigQueryClient([
            'projectId' => $projectId,
        ]);
    
        $query = <<<ENDSQL
        SELECT DISTINCT IFNULL($column, 'Unknown') AS column
        FROM `$projectId.cbac_wordpress.long_avy_table`
        ORDER BY column;
        ENDSQL;
        $queryJobConfig = $bigQuery->query($query);
        $queryResults = $bigQuery->runQuery($queryJobConfig);

        if ($queryResults->isComplete()) {
            $rows = $queryResults->rows();
            foreach ($rows as $row) {
                $filter[$f] = $row['column']; 
                ++$f;
            }
            
        } else {
             throw new Exception('The query failed to complete');
        }

        return $filter;
    }

}

?>
