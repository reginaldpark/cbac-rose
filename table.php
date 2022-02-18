<?php

    //  echo('GOOGLE_APPLICATION_CREDENTIALS===='.getenv('GOOGLE_APPLICATION_CREDENTIALS'));
    // die(phpinfo());

    $cache = "1.3";
    $startDate = '2021-08-01';
    $endDate = '2022-07-31';
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <link rel='stylesheet' href='/css/rose.css?c=<?php echo $cache ?>' type='text/css'	media='all' />
</head>
<body>		
    <div style="margin:20px;">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Forcast Zone</th>
                    <th>Size</th>
                    <th>Trigger</th>
                    <!-- <th>Danger Rating</th> -->
                    <th>Type</th>
                    <th>Interface</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($avalanches as $avalanche) {  
                    // $c1 = explode("-", $avalanche['avalancheDate']); [1]}/{$c1[2]}/{$c1[0] <td>{$avalanche['danger']}</td>
                    $c1 = $avalanche['avalancheDate'];
                    echo "<tr>
                            <td>{$c1}</td>
                            <td>{$avalanche['zone']}</td>
                            <td>{$avalanche['size']}</td>
                            <td>{$avalanche['trigger']}</td>
                            <td>{$avalanche['type']}</td>
                            <td>{$avalanche['interface']}</td>
                            <td><a href='{$avalanche['url']}' target='_blank'>Observation</a></td>
                    </tr>";
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Date</th>
                    <th>Forcast Zone</th>
                    <th>Size</th>
                    <th>Trigger</th>
                    <!-- <th>Danger Rating</th> -->
                    <th>Type</th>
                    <th>Interface</th>
                    <th>Link</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <script src="//code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

    <script type="text/javascript" src="/js/table.js?c=<?php echo $cache ?>"></script>
</body>
</html>