function showMore(data) {
    document.querySelector(`.${data}`).style.display = "block";
    // console.log('moree', data);
}

function showLess(data) {
    document.querySelector(`.${data}`).style.display = 'none';
}

var Initial=".Devs"

function Acordion(Data) {
    document.querySelector(Data).style.display='block';
    setTimeout(()=>{
        document.querySelector(Data).style.transform = `translateX(${0}px)`
        
        if (Data!= Initial) {
            document.querySelector(Initial).style.display='none'; 
            document.querySelector(Initial).style.transform = `translateX(${-100}%)`
           
        }
        
        Initial=Data
    }, 10)
    
}


