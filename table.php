<?php
    // OLD LINK https://docs.google.com/spreadsheets/d/1xL2iXjjMsr4cGzomA3MLO7FGcvwXzOCpw4bSxIqt7VA/edit#gid=496425334
    //  echo('GOOGLE_APPLICATION_CREDENTIALS===='.getenv('GOOGLE_APPLICATION_CREDENTIALS'));
    // die(phpinfo());

    $cacheClear = "1.11";
    $startDate = '2021-08-01';
    $endDate = date("Y-m-d");
    include('data.php');

    // die($avalanches);

?>

<html>
<head>
    <title>Avalanche Table</title>
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
    <link rel='stylesheet' href='//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css'>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/searchpanes/1.4.0/css/searchPanes.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css">

    <link rel='stylesheet' href='/css/table.css?c=<?php echo $cacheClear ?>' type='text/css'	media='all' />
</head>
<body>		
    <div class="banner">
        <a href="https://cbavalanchecenter.org">
            <img src="/img/CBAC_white.png" alt="CBAC">
        </a>
    </div>
    <div class="main-container">
        <header class="entry-header" style="margin-bottom:15px;">
            <h1 class="entry-title">Avalanche Table</h1>
        </header>
        <table class="date-filter-container" border="0" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td style="padding:0;"><b id="date-filter-title">Filters:&nbsp;&nbsp;</b>
                        <input type="text" id="min" name="min" placeholder="Start Date">&nbsp;
                        <input type="text" id="max" name="max" placeholder="End Date">&nbsp;
                        <select id="location-filter"><option value="">Location</option></select>
                    </td>
                </tr>
            </tbody>
        </table>    
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Date</th>    
                    <th>Date</th>
                    <th>Forcast Zone</th>
                    <th>Location</th>
                    <th>Size</th>
                    <th>Elevation</th>
                    <th>Aspect</th>
                    <th>Trigger</th>
                    <th>Trigger Modifier</th>
                    <th>Type</th>
                    <th>Interface</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($avalanches as $avalanche) {  
                    $c1 = explode("-", $avalanche['avalancheDate']); 
                    echo "<tr>
                            <td>{$avalanche['avalancheDate']}</td>
                            <td><span class='none'>{$avalanche['avalancheDate']}</span>{$c1[1]}/{$c1[2]}/{$c1[0]}</td>
                            <td>{$avalanche['zone']}</td>
                            <td>{$avalanche['location']}</td>
                            <td>{$avalanche['size']}</td>
                            <td>{$avalanche['elevation']}</td>
                            <td>{$avalanche['aspect']}</td>
                            <td>{$avalanche['trigger']}</td>
                            <td>{$avalanche['modifier']}</td>
                            <td>{$avalanche['type']}</td>
                            <td>{$avalanche['interface']}</td>
                            <td><a href='{$avalanche['url']}' target='_blank'>View&nbsp;Observation</a></td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="//code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

	<script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/searchpanes/1.4.0/js/dataTables.searchPanes.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>

    <script type="text/javascript" src="/js/table.js?c=<?php echo $cacheClear ?>"></script>
</body>
</html>