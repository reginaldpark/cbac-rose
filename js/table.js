var minDate, maxDate, locationFilter;
 
// Custom filtering function which will search data in column four between two values
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = minDate.val();
        var max = maxDate.val();
        var loc = locationFilter.val();
        var rowDate = new Date( data[0] );
        var rowLocation = data[3];
        
        if (
            ( min === null && max === null && ( loc === null || loc === '' || loc === rowLocation ) ) ||
            ( min === null && rowDate <= max && ( loc === null || loc === '' || loc === rowLocation ) ) ||
            ( min <= rowDate && max === null && ( loc === null || loc === '' || loc === rowLocation ) ) ||
            ( min <= rowDate && rowDate <= max && ( loc === null || loc === '' || loc === rowLocation ) )
        ) {
            return true;
        }
        return false;
    }
);

$(function(){
	
    // Create date inputs
    minDate = new DateTime($('#min'), {
        format: 'MM/DD/YYYY'
    });
    maxDate = new DateTime($('#max'), {
        format: 'MM/DD/YYYY'
    });
    locationFilter = $('#location-filter');

    var table = $('#example').DataTable( {
        dom: 'BPlfrtip',
        initComplete: function () {
            this.api()
                .columns( 3 )
                .every(function () {
                    var column = this;
                    var select = locationFilter;
 
                    column
                        .data()
                        .unique()
                        .sort()
                        .each(function (d, j) {
                            if ( d != '' ) {
                                select.append('<option value="' + d + '">' + d + '</option>');
                            }
                        });
                });
        },
        buttons: [
            {
                extend: 'excel',
                exportOptions: {
                    columns: [ ':visible' ]
                }
            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: [ ':visible' ]
                }
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: [ ':visible' ]
                }
            }
        ],
        responsive: true,
        pageLength: 25,
        order: [[ 0, "desc" ]],
        searchPanes: {
            controls: false,
            viewCount: false
        },
        columnDefs: [
            { 
                visible: false, 
                targets: [0],
                searchPanes: {
                    show: false
                }
            },
            { 
                targets: [1,2,3,8,11],
                searchPanes: {
                    show: false
                }
            }
        ]
    } );

    // Refilter the table
    $('#min, #max, #location-filter').on('change', function () {
        table.draw();
    });

});