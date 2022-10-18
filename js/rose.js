$body = $("body");

$(function(){
	
	// Set default date window of 2 weeks
	var selectedYear = parseInt( $( "#year-select" ).val() );
	var today = new Date();
	
	if ( selectedYear == today.getFullYear() ) {
		// This year bounds & default values
		var minBound = new Date(selectedYear, 8, 1),
			maxBound = today,
			minDefault= new Date(today.getFullYear(), today.getMonth(), today.getDate()-14),
			maxDefault = today;
	} else {
		// Last year bounds & default values
		var minBound = new Date(selectedYear, 8, 1),
			maxBound = new Date(selectedYear+1, 7, 31),
			minDefault= new Date(selectedYear, 8, 1),
			maxDefault = new Date(selectedYear+1, 7, 31);
	}

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

	$( "#year-select" ).change(function() {
		var thisYear = $( this ).val();
		// window.location = "https://cbavalanchecenter.org/avalanche-rose/?year="+thisYear;
		window.location = "/rose.php?year="+thisYear;
	});

	// Color By dropdown changed
	$( "#color-by" ).change(function() {
		var $this = $( this );
		var colorBy = $this.val();
			colorBy = (colorBy == "") ? "zone" : colorBy;

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
			$("."+colorBy+"-"+name).addClass("color"+count);
		});

	});

	// Initialize date range slider
	$("#slider").dateRangeSlider({
		bounds: { min: minBound, max: maxBound },
		defaultValues: { min: minDefault, max: maxDefault },
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


		
	var minDefaultFormat = formatDateForQuery( minDefault );
	var maxDefaultFormat = formatDateForQuery( maxDefault );

	// Default Date Range
	getJSONData( minDefaultFormat,maxDefaultFormat );
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
				
				var size = avalanches[a].size;
				var sizeClass = avalanches[a].size.split('.').join('-');
				var avalancheDate = avalanches[a].avalancheDate;
				var aAvalancheDate = avalancheDate.split('-');
				var avalancheDateFormat = aAvalancheDate[1]+'/'+aAvalancheDate[2]+'/'+aAvalancheDate[0];
				var avyMonth = parseInt(aAvalancheDate[1])-1;
				var dAvalanceDate = new Date ( aAvalancheDate[0], avyMonth, parseInt(aAvalancheDate[2]) );
				var elevation = avalanches[a].elevation;
				var aspect = avalanches[a].aspect;
				var trigger = avalanches[a].trigger;
				var triggerFilter = avalanches[a].triggerFilter.split(' ').join('-');;
				var modifier = avalanches[a].modifier;
				var zone = avalanches[a].zone;
				var type = avalanches[a].type;
				var typeFilter = avalanches[a].typeFilter;
				var interface = avalanches[a].interface;
				var url = avalanches[a].url;
				var typeClass = typeFilter.split(' ').join('-');
				var interfaceClass = interface.split(' ').join('-').split('/').join('-');
				var top = avalanches[a].top;
				var left = avalanches[a].left;

				// Set opacity by day
				var dayDifference = Math.floor((new Date() - dAvalanceDate) / (1000*60*60*24) - 1);
					dayDifference = ( dayDifference >= 8 ) ? 8 : dayDifference;
				var opacity = addOpacity ? 1-dayDifference*0.1 : 1;

				// Fill HTML tooltip text 
				var thisTooltip = "Date: "+avalancheDateFormat+"<br>Zone: "+zone+"<br>Size: "+size+"<br>Elevation: "+elevation+"<br>Aspect: "+aspect+"<br>Trigger: "+trigger+"<br>Trigger Modifier: "+modifier+"<br>Type: "+type+"<br>Interface: "+interface+"<br><a href='"+url+"' target='_blank'>View Observation</a>";
				// List of classes for filtering
				var theseClasses = String('size-'+sizeClass+' trigger-'+triggerFilter+' modifier-'+modifier+' zone-'+zone+' type-'+typeClass+' interface-'+interfaceClass).toLowerCase();
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
				trigger: 'click',
				closeOnClick: 'body',
				closeButton: 'box'
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