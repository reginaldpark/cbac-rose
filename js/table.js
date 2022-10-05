var minDate, maxDate;
 
// Custom filtering function which will search data in column four between two values
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = minDate.val();
        var max = maxDate.val();
        var date = new Date( data[0] );
 
        if (
            ( min === null && max === null ) ||
            ( min === null && date <= max ) ||
            ( min <= date  && max === null ) ||
            ( min <= date  && date <= max )
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

    var table = $('#example').DataTable( {
        dom: 'BPlfrtip',
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
            controls: false
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
    $('#min, #max').on('change', function () {
        table.draw();
    });

});