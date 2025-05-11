// import './bootstrap';

// ajax to send form search query for processing

$(document).ready(function() {
    let timeout;

    const form = document.getElementById('searchForm');
    
    $('.search_bar').on('keyup', function() {
        var query = $(this).val(); // Get input value
        
        clearTimeout(timeout);
        timeout = setTimeout(function() {
            if(query.length > 2) { // Trigger search only if input length > 2
                // show the suggestion box
                $('.search_result').css('display','block');

                $.ajax({
                    url: "/encore/studentSearch", // Route to search
                    type: "GET",
                    data: { query: query },
                    success: function(data) {
                        $('.search_result').empty(); // Clear previous suggestions
                        
                        if(data.length > 0) {
                            // Loop through each student and append the name to the search result
                            $.each(data, function(index, student) {
                                  
                                // $('.search_result').append('<a href="/encore/profile/'+student.id+'"><div class="searchResult">' + student.first_name + student.middle_name+ student.last_name+ student.id + '</div> </a>');

                                $('.search_result').append(`
                                    <a href="/encore/profile/${student.id}" class="searchResult"> 
                                        <div>  
                                            <b> Name: </b> ${student.first_name +' '+ student.middle_name +' '+ student.last_name }
                                            --
                                            <b> RegNo: </b>${student.reg_no} 
                                        </div>
                                    </a>
                                `);
                                
                                // set the form action to redirect to the students profile view
                                form.action = '/encore/profile/'+student.id;


                            });


                        }else if( data.type == 'batch'){
                            
                            // check if the search result is a batch or individual
                            $('.search_result').append(`
                                <a href="/encore/batch/${data.batch_no}" class="searchResult"> 
                                    <div> 
                                        <b>Program:</b> ${ data.course} 
                                        -- 
                                        <b> Start Date: </b> ${ data.start_date} 
                                        --
                                        <b>Faculty: BOSS</b>
                                    </div> 
                                </a>
                                
                            `);
                                    
                            // set the form action to redirect to the batch view
                            form.action = '/encore/batch/';
                            
                            
                        }else {
                            // If no results are found, show a message
                            $('.search_result').append(`<a class="searchResult"> <div> No results found </div </a>`);

                        }
                    },
                    error: function() {
                        // Handle any errors in the AJAX request
                        $('.search_result').empty().append('<a class="searchResult"> <div> Error occurred while searching</div> </a>');
                    }
                });
            } else {
                $('.search_result').empty(); // Clear suggestions if input is too short
            }
        }, 300); // 300ms delay
    });
});
