jQuery(document).ready(function () {
    $('#example7').DataTable( {
        dom: 'Bfrtip',
        select: true,
        buttons: [
            {
                extend: 'collection',
                text: ' Export All Contacts ',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]
            }
        ]
    } );
});