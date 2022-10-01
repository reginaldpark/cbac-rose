<?php

/* Query Database
Smart filters
require __DIR__ . '/vendor/autoload.php';

use Google\Cloud\BigQuery\BigQueryClient;
 */

class Data {
    // Properties
    public $zones;
    public $sizes;
    public $triggers;
    public $types;
    public $interfaces;
    public $modifiers;

    function __construct() {

        $this->zones = array("Northwest", "Southeast");
        $this->sizes = array("D1", "D1.5", "D2", "D2.5", "D3", "D3.5", "D4", "D4.5", "D5");
        $this->types = array("Loose", "Wet Loose", "Soft Slab", "Hard Slab", "Wet Slab", "Other");
        $this->interfaces = array("Within storm snow", "New/Old interface", "Old Snow", "Ground", "Unknown");
        $this->triggers = array("Natural", "Human Triggered", "Explosive", "Other", "Unknown");
        $this->modifiers = array("Unintentional", "Controlled", "Remote", "Sympathetic", "Unknown");
        // $this->sizes= $this->getFilter( 'destructive_size' );
        // $this->types= $this->getFilter( 'type' );
        // $this->interfaces= $this->getFilter( 'failure_plane' );
        // $this->triggers= $this->getFilter( 'trigger' );

    }
/* Smart filters
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
*/
}

?>
