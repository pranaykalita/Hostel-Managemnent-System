// search student

$(document).ready(function(){
    $('#search').keyup(function(){
        search_table($(this).val());
    });


    function search_table(value){
        $('#student_table tr').each(function(){
            var found = 'false';
            $(this).each(function(){
                if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                {
                    found = 'true';

                }
            });
            if(found == 'true')
            {
                $(this).show();
            }
            else{
                $(this).hide();
            }
        });
    }
})



// datatable students
$(document).ready(function() {
    $('.myTable').DataTable();
} );

// hostal tables
$(document).ready(function() {
    $('.hostalTable').DataTable();
} );
// Room tables
$(document).ready(function() {
    $('.roomTable').DataTable();
} );
// Course tables
$(document).ready(function() {
    $('.courseTable').DataTable();
} );