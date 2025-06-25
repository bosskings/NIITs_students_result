let regNumElements = document.querySelectorAll('#regNo')
let batchNumElements = document.querySelectorAll('#batchNo')
let timeout

// ajax to update students profile reg number and batch number in DB
updateRecords = (element) => {
    
    clearTimeout(timeout);
    timeout = setTimeout(function() {
        if(element.target.value.length > 5) { // Trigger search only if input length > 5
            
            
            $.ajax({
                url: "/encore/updateStudents", // Route to search
                type: "GET",
                data: { 
                    query1: element.target.value,
                    query2: element.target.placeholder,
                    query3: element.target.title
                },
                success: function(data) {
                    if(data.message == 'success'){
                        document.querySelector('#mssg'+element.target.placeholder).style.display = 'inline';
                        document.querySelector('#mssg'+element.target.placeholder).style.background = 'green'
                    }else{
                        document.querySelector('#mssg'+element.target.placeholder).style.display = 'inline';
                        document.querySelector('#mssg'+element.target.placeholder).style.background = 'red'
                    }
                    // console.log(data.message);
                }

            })
        }

    }, 200)
    
}

// call function when regnumbers are typed
regNumElements.forEach((regNum)=>{
    regNum.addEventListener('keyup', updateRecords);
})


// call function when batchnumbers are typed
batchNumElements.forEach((batchNum)=>{
    batchNum.addEventListener('keyup', updateRecords);
})