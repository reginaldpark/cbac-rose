$body = $("body");

$(function(){
	
	// Set default date window of 2 weeks
	var today = new Date();
	var defaultStart = new Date(today.getFullYear(), today.getMonth(), today.getDate()-14);

	// Filter dropdown changes
	$( "select.filters" ).change(function() {
		// Get filter value
		var $this = $( this );
		var filterType = $this.data( "type" );
		var filterValue = $this.val();
		
		// Hide all avalanches
		$(".avalanches").hide();
		var aFilters = [];
		
		// Create an array of all selected filters
		$( ".filters" ).each(function( index ) {
			var filterValue = $( this ).val();
			
			if (filterValue != "")
				aFilters.push( "." + filterValue ); 
		});

		// Show the appropriate filtered avalanche divs
		$(".avalanches"+ aFilters.join("")).show();
		
	});

	// Color By dropdown changed
	$( "#color-by" ).change(function() {
		var $this = $( this );
		var colorBy = $this.val();
			colorBy = (colorBy == "") ? "zone" : colorBy;
		var classSuffix = (colorBy == "danger") ? "danger" : "";

		// Display proper legend
		$(".custom-legend .legend-entry").hide();
		$(".legend-entry."+colorBy+"-legend").show();
		$(".avalanches").removeClass (function (index, className) {
			return (className.match (/(^|\s)color\S+/g) || []).join(' ');
		});

		// Display avalanche circles
		$( ".color-"+colorBy ).each(function( index ) {
			var count = $( this ).data("count");
			var name = $( this ).data("name");
			$("."+colorBy+"-"+name).addClass("color"+classSuffix+count);
		});

	});

	// $( document ).ajaxStart(function() {
	// 	$body.addClass("loading");
	// });

	// $( document ).ajaxStop(function() {
	// 	$body.removeClass("loading");
	// });

	// Initialize date range slider
	$("#slider").dateRangeSlider({
		bounds: { min: new Date(2021, 11, 1), max: new Date() },
		defaultValues: { min: defaultStart, max: today },
		formatter:function(val){
			var days = val.getDate(),
				month = val.getMonth() + 1,
				year = String(val.getFullYear()).slice(-2);
			return month + "/" + days + "/" + year;
		}
	});

	// Date Range numbers changed
	$("#slider").bind("valuesChanged", function(e, data){
		// Format numbers
		var startDateFormat = formatDateForQuery( data.values.min );
		var endDateFormat = formatDateForQuery( data.values.max );

		getJSONData( startDateFormat, endDateFormat );
	});
	
	var defaultStartFormat = formatDateForQuery( defaultStart );
	var todayFormat = formatDateForQuery( today );

	// Default Date Range
	getJSONData( defaultStartFormat, todayFormat );
	// Default legend
	$(".custom-legend").show();
	  
});

function getJSONData( startDate, endDate ) {
	$( '.avalanche-rose-center' ).empty();
	$body.addClass("loading");

	// If end date is today, use opacity to show recency
	var todayFormat = formatDateForQuery( new Date() );
	var addOpacity = ( endDate == todayFormat )  ? true : false;

	// Get data
	$.ajax({
		type: "POST",
		url: "/json.php",
		data: { "start": startDate, "end": endDate }, 
		dataType: 'JSON',
		success: function(avalanches){

			console.log(avalanches);

			for ( var a = 0; a < avalanches.length; a++) {
				var avalancheCount = a + 1;
				
				var size = avalanches[a].size.split('.').join('-');
				var avalancheDate = avalanches[a].avalancheDate;
				var aAvalancheDate = avalancheDate.split('-');
				var avalancheDateFormat = aAvalancheDate[1]+'/'+aAvalancheDate[2]+'/'+aAvalancheDate[0];
				var avyMonth = parseInt(aAvalancheDate[1])-1;
				var dAvalanceDate = new Date ( aAvalancheDate[0], avyMonth, parseInt(aAvalancheDate[2]) );
				var trigger = avalanches[a].trigger;
				// var danger = avalanches[a].danger;
				var zone = avalanches[a].zone;
				var type = avalanches[a].type;
				var interface = avalanches[a].interface;
				var url = avalanches[a].url;
				var typeClass = type.split(' ').join('-');
				var interfaceClass = interface.split(' ').join('-').split('/').join('-');
				var top = avalanches[a].top;
				var left = avalanches[a].left;

				// Set opacity by day
				var dayDifference = Math.floor((new Date() - dAvalanceDate) / (1000*60*60*24) - 1);
					dayDifference = ( dayDifference >= 8 ) ? 8 : dayDifference;
				var opacity = addOpacity ? 1-dayDifference*0.1 : 1;

				// Fill HTML tooltip text 
				// <td>{$avalanche['danger']}</td> ' danger-'+danger
				var thisTooltip = "Date: "+avalancheDateFormat+"<br>Zone: "+zone+"<br>Size: "+size+"<br>Trigger: "+trigger+"<br>Type: "+type+"<br>Interface: "+interface+"<br><a href='"+url+"' target='_blank'>Observation</a>";
				// List of classes for filtering
				var theseClasses = String('size-'+size+' trigger-'+trigger+' zone-'+zone+' type-'+typeClass+' interface-'+interfaceClass).toLowerCase();
				// Create avalanche divs
				var avalancheHtml = '<div class="avalanches avalanche-'+avalancheCount+' ' + theseClasses + '" style="top:'+top+'rem; left:'+left+'rem; opacity:'+opacity+'" title="'+thisTooltip+'"></div>';
				$( '.avalanche-rose-center' ).append(avalancheHtml);
			}
			
			// Set colors by dropdown
			$( "select.filters" ).trigger( "change" );
			$( "#color-by" ).trigger( "change" );

			// Initialize new tooltips
			new jBox('Tooltip', {
				attach: '.avalanches',
				trigger: 'click'
			});

			$body.removeClass("loading");
		}
	});


}

function formatDateForQuery( thisDate ) {
	
	var thisDay = thisDate.getDate(),
		thisMonth = thisDate.getMonth() + 1,
		thisYear = thisDate.getFullYear();
		thisDay = String('0'+thisDay).slice(-2);
		thisMonth = String('0'+thisMonth).slice(-2);
	
	return thisYear + "-" + thisMonth + "-" + thisDay;

}