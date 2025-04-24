// import './bootstrap';

// ajax to send form search query for processing

$(document).ready(function() {
    let timeout;
    
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
                        console.log(data)
                        
                        if(data.length > 0) {
                            // Loop through each student and append the name to the search result
                            $.each(data, function(index, student) {
                                $('.search_result').append('<li>' + student.first_name + '</li> <li>' + student.course + '</li>');
                            });
                        } else {
                            // If no results are found, show a message
                            $('.search_result').append('<li>No results found</li>');
                        }
                    },
                    error: function() {
                        // Handle any errors in the AJAX request
                        $('.search_result').empty().append('<li>Error occurred while searching</li>');
                    }
                });
            } else {
                $('.search_result').empty(); // Clear suggestions if input is too short
            }
        }, 300); // 300ms delay
    });
});
