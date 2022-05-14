var button = document.getElementById("counter");
var count = document.getElementById("counter");
var seconds = 0;
var el = document.getElementById('seaconds-counter');


var counter = 0;
var incriment = 1;
if(button){

function incrementSeconds() {
    seconds += incriment;
    el.innerText = "You have been here for " + seconds + " seconds.";
    if(seconds == 5){
        
        incriment = 0;
        seconds = 0;
        
        

    
    
    }
}



button.addEventListener("click", () =>{
    var cancel = setInterval(incrementSeconds, 1000);
    count.innerText = counter = counter + incriment;

});
}




