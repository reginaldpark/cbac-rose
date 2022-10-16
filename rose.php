<?php

    //  echo('GOOGLE_APPLICATION_CREDENTIALS===='.getenv('GOOGLE_APPLICATION_CREDENTIALS'));
    // die(phpinfo());

    include('filterData.php');

    $cacheClear = "1.9";
    $data = new Data;
    // $zones = $data->getZones();
    $zones = $data->zones;
    $interfaces = $data->interfaces;
    $types = $data->types;
    $triggers = $data->triggers;
    $modifiers = $data->modifiers;

    $startYear = (date("n") >= 9) ? date("Y") : date("Y")-1;
    $year = $_GET["year"];
    if ( $year == "" ) {
        $year = $startYear;
    }

    // die($triggers);

?>

<html>
<head>
    <title>Avalanche Rose</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' id='wp-block-library-css'
		href='//cbavalanchecenter.org/wp-includes/css/dist/block-library/style.min.css?ver=5.8.2' type='text/css'
		media='all' />
	<link rel='stylesheet' id='wp-block-library-theme-inline-css'
		href='/css/template1.css' type='text/css'
		media='all' />
	<link rel='stylesheet' id='foobox-free-min-css'
		href='//cbavalanchecenter.org/wp-content/plugins/foobox-image-lightbox/free/css/foobox.free.min.css?ver=2.7.16'
		type='text/css' media='all' />
	<link rel='stylesheet' id='mappress-leaflet-css' href='//unpkg.com/leaflet@1.7.1/dist/leaflet.css?ver=1.7.1'
		type='text/css' media='all' />
	<link rel='stylesheet' id='mappress-css'
		href='//cbavalanchecenter.org/wp-content/plugins/mappress-google-maps-for-wordpress/css/mappress.css?ver=2.72.5'
		type='text/css' media='all' />
	<link rel='stylesheet' id='nac-avalanche-shortcodes-css'
		href='//cbavalanchecenter.org/wp-content/plugins/nac-avalanche-shortcodes/public/css/nac-avalanche-shortcodes-public.css?ver=1.0.1'
		type='text/css' media='all' />
	<link rel='stylesheet' id='x-stack-css'
		href='//cbavalanchecenter.org/wp-content/themes/pro/framework/dist/css/site/stacks/integrity-light.css?ver=5.0.8'
		type='text/css' media='all' />
	<link rel='stylesheet' id='x-child-css'
		href='//cbavalanchecenter.org/wp-content/themes/pro-child/style.css?ver=5.0.8' type='text/css'
		media='all' />
	<link rel='stylesheet' id='cs-inline-css' href='/css/template2.css' type='text/css' media='all' />
	<link href="/lib/jQRangeSlider/css/iThing.css" rel="stylesheet" media="screen">
    
    <link href="https://cdn.jsdelivr.net/gh/StephanWagner/jBox@v1.3.3/dist/jBox.all.min.css" rel="stylesheet">

    <link rel='stylesheet' href='/css/rose.css?c=<?php echo $cacheClear ?>' type='text/css'	media='all' />
</head>
<body class="loading">
	<div class="custom-widget">
		<div class="container">
			
			<div class="filters-container">
                <div class="date-container"> 
                    <div class="year-container">    
                        <select id="year-select" class="small gfield_select">
                            <?php 
                                
                                for ($yyyy = $startYear; $yyyy >= 2021; $yyyy--) {
                                    $nextYear = $yyyy + 1;
                                    echo "<option value='{$yyyy}' ";
                                    if ($yyyy == $year) {
                                        echo "selected";
                                    }
                                    echo ">{$yyyy}-{$nextYear}</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="slider-container">
                        <div id="slider"></div>
                    </div>
                </div>
				<div class="filter-container">
					<select id="zone-filter" class="filters small gfield_select" data-type="zone">
						<option value="">All Forecast Zones</option>
						<?php 
                            foreach ($zones as $zone) {
                                $formattedValue = strtolower($zone);
                                echo "<option value='zone-{$formattedValue}'>{$zone}</option>";
                            }
                        ?>
					</select>
					<select id="type-filter" class="filters small gfield_select" data-type="typeFilter">
						<option value="">All Avalanche Types</option>
						<?php 
                            foreach ($types as $type) {
                                $formattedValue = str_replace(' ', '-', strtolower($type));
                                echo "<option value='type-{$formattedValue}'>{$type}</option>";
                            }
                        ?>
					</select>
					<select id="interface-filter" class="filters small gfield_select" data-type="interface">
						<option value="">All Failure Interfaces</option>
						<?php 
                            foreach ($interfaces as $interface) {
                                $formattedValue = str_replace(' ', '-', str_replace('/', '-', strtolower($interface)));
                                echo "<option value='interface-{$formattedValue}'>{$interface}</option>";
                            }
                        ?>
					</select>
					<select id="trigger-filter" class="filters small gfield_select" data-type="triggerFilter">
						<option value="">All Triggers</option>
						<?php 
                            foreach ($triggers as $trigger) {
                                $formattedValue = strtolower(str_replace(' ', '-', $trigger));
                                echo "<option value='trigger-{$formattedValue}'>{$trigger}</option>";
                            }
                        ?>
					</select>
                    <select id="modifier-filter" class="filters small gfield_select" data-type="modifier">
						<option value="">All Modifiers</option>
						<?php 
                            foreach ($modifiers as $modifier) {
                                $formattedValue = strtolower($modifier);
                                echo "<option value='modifier-{$formattedValue}'>{$modifier}</option>";
                            }
                        ?>
					</select>
					<select id="size-filter" class="filters small gfield_select" data-type="size">
						<option value="">All Sizes</option>
						<?php 
                            foreach ($data->sizes as $size) {
                                $lowerCaseSize = strtolower(str_replace('.', '-', $size));
                                echo "<option value='size-{$lowerCaseSize}'>{$size}</option>";
                            }
                        ?>
					</select>
				</div>
			</div>
            <div class="avalanche-row">
                <div class="avalanche-rose-container">
                    <div class="avalanche-rose">
                        <div class="avalanche-rose-center"></div>
                    </div>
                </div>
                <div class="legend-container">
                    <div class="legend">
                        <select id="color-by" class="small gfield_select">
                            <option value="">Color Code By</option>		
                            <option value="type">Avalanche Type</option>
                            <option value="interface">Failure Interface</option>
                            <option value="trigger">Trigger</option>
                            <option value="zone">Forecast Zone</option>
                        </select>
                        <div class="custom-legend" style="display:none;">
                            <?php 
                                echo "<table border=0>";
                                $t = 1;
                                foreach ($types as $type) {
                                    $formattedValue = str_replace(' ', '-', strtolower($type));
                                    echo "<tr class='legend-entry type-legend' >
                                        <td class='legend-col-left'><div class='legend-circle size-d3 color{$t} color-type' data-name='{$formattedValue}' data-count='{$t}'></div></td>
                                        <td><div class='legend-label'>{$type}</div></td>
                                    </tr>";
                                    ++$t;
                                }
                                $i = 1;
                                foreach ($interfaces as $interface) {
                                    $formattedValue = str_replace(' ', '-', str_replace('/', '-', strtolower($interface)));
                                    echo "<tr class='legend-entry interface-legend' >
                                        <td class='legend-col-left'><div class='legend-circle size-d3 color{$i} color-interface' data-name='{$formattedValue}' data-count='{$i}'></div></td>
                                        <td><div class='legend-label'>{$interface}</div></td>
                                    </tr>";
                                    ++$i;
                                }
                                $t = 1;
                                foreach ($triggers as $trigger) {
                                    $formattedValue = str_replace(' ', '-', strtolower($trigger));
                                    echo "<tr class='legend-entry trigger-legend' >
                                        <td class='legend-col-left'><div class='legend-circle size-d3 color{$t} color-trigger' data-name='{$formattedValue}' data-count='{$t}'></div></td>
                                        <td><div class='legend-label'>{$trigger}</div></td>
                                    </tr>";
                                    ++$t;
                                }
                                for ($z = 0; $z < count($zones); $z++) {
                                    $lowerCaseZone = strtolower($zones[$z]);
                                    $plusOne = $z + 1;
                                    echo "<tr class='legend-entry zone-legend'>
                                            <td class='legend-col-left'><div class='legend-circle size-d3 color{$plusOne} color-zone' data-name='{$lowerCaseZone}' data-count='{$plusOne}'></div></td>
                                            <td><div class='legend-label'>{$zones[$z]}&nbsp;Mountains</div></td>
                                        </tr>";
                                }
                                echo "</table>";
                            ?>
                        </div>
                    </div>
                    <hr>
                    <div class="legend size-legend">
                        <label>Avalanche Size:</label>
                        <table border=0>
                            <tr><td class='legend-col-left'><div class="legend-circle size-d5 color1"></div></td><td><div class="legend-label">D5</div></td></tr>
                            <tr><td class='legend-col-left'><div class="legend-circle size-d4 color1"></div></td><td><div class="legend-label">D4</div></td></tr>
                            <tr><td class='legend-col-left'><div class="legend-circle size-d3 color1"></div></td><td><div class="legend-label">D3</div></td></tr>
                            <tr><td class='legend-col-left'><div class="legend-circle size-d2 color1"></div></td><td><div class="legend-label">D2</div></td></tr>
                            <tr><td class='legend-col-left'><div class="legend-circle size-d1 color1"></div></td><td><div class="legend-label">D1</div></td></tr>
                        </table>
                    </div>
                </div>
            </div>
		</div>
	</div>
    <script src="//code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="/lib/jQRangeSlider/lib/jquery.mousewheel.min.js"></script>
	<script src="/lib/jQRangeSlider/jQRangeSliderMouseTouch.js"></script>
	<script src="/lib/jQRangeSlider/jQRangeSliderDraggable.js"></script>
	<script src="/lib/jQRangeSlider/jQRangeSliderHandle.js"></script>
	<script src="/lib/jQRangeSlider/jQRangeSliderBar.js"></script>
	<script src="/lib/jQRangeSlider/jQRangeSliderLabel.js"></script>
	<script src="/lib/jQRangeSlider/jQRangeSlider.js"></script>
	<script src="/lib/jQRangeSlider/jQDateRangeSliderHandle.js"></script>
	<script src="/lib/jQRangeSlider/jQDateRangeSlider.js"></script>
	<script src="/lib/jQRangeSlider/jQEditRangeSliderLabel.js"></script>
	<script src="/lib/jQRangeSlider/jQEditRangeSlider.js"></script>
	<script src="/lib/jQRangeSlider/jQRuler.js"></script>
    <script type="text/javascript" src="/lib/jQRangeSlider/jQDateRangeSlider.js"></script>
	
    <!--- jBox tooltip plugin --->
    <script src="https://cdn.jsdelivr.net/gh/StephanWagner/jBox@v1.3.3/dist/jBox.all.min.js"></script>

    <script type="text/javascript" src="/js/rose.js?c=<?php echo $cacheClear ?>"></script>
    <div class="loading-modal"></div>
</body>
</html>