let timeout
const form = document.getElementById('searchForm');
    
$('.search_bar').on('keyup', function() {
    var query = $(this).val(); // Get input value
    

    
    clearTimeout(timeout);
    timeout = setTimeout(function() {
        if(query.length > 2) { // Trigger search only if input length > 2
            $.ajax({
                url: "/encore/studentSearch", // Route to search
                type: "GET",
                data: { query: query },
                success: function(data) {
                    $('.search_result').empty(); // Clear previous suggestions
                    
                    
                    if(data.length > 0) {
                        // Loop through each student and append the name to the search result
                        $.each(data, function(index, student) {
                            
                            $('.search_result').css('display', 'block');

                            $('.search_result').append('<a href="/encore/profile/'+student.id+'"><div>' + student.first_name + student.id + '</div> </a>');
                            
                        
                            // set the form action to redirect to the students profile view
                            form.action = '/encore/profile/'+student.id;


                        });


                    }else if( data.type == 'batch'){

                        // check if the search result is a batch or individual

                        $('.search_result').css('display', 'block');

                        $('.search_result').append('<a href="/encore/batch/'+ data.batch_no +'"><div> <b>Batch:</b> ' + data.course + ' - <b> Start Date </b>'+ data.start_date+' </div> </a>');
                                
                        // set the form action to redirect to the batch view
                        form.action = '/encore/batch/';
                        
                        
                    }else {
                        // If no results are found, show a message
                        $('.search_result').append('<li>No results found</li>');

                    }
                },
                error: function() {
                    // Handle any errors in the AJAX request
                    $('.search_result').empty().append('<div>Error occurred while searching</div>');
                }
            });
        } else {
            $('.search_result').empty(); // Clear suggestions if input is too short
        }
    }, 300); // 300ms delay
});

