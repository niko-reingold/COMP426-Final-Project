//d4, d6, d8, d10, d12 and d20
function d4(){
    var roll = Math.floor((Math.random() * 4) + 1);
    return roll;
}
function d6(){
    var roll = Math.floor((Math.random() * 6) + 1);
    return roll;
}
function d8(){
    var roll = Math.floor((Math.random() * 8) + 1);
    return roll;
}
function d10(){
    var roll = Math.floor((Math.random() * 10) + 1);
    return roll;
}
function d12(){
    var roll = Math.floor((Math.random() * 12) + 1);
    return roll;
}
function d20(){
    var roll = Math.floor((Math.random() * 20) + 1);
    return roll;
}
var minLength = 3;
$(document).ready(function () {
     $("#D20").on('click', function(e){
       resultBox = document.getElementById("roll");
       roll = d20();
       resultBox.innerHTML = "D20 roll: " + roll;
     });
     $("#D12").on('click', function(e){
       resultBox = document.getElementById("roll");
       roll = d12();
       resultBox.innerHTML = "D12 roll: " + roll;
     });
     $("#D10").on('click', function(e){
       resultBox = document.getElementById("roll");
       roll = d10();
       resultBox.innerHTML = "D10 roll: " + roll;
     });
     $("#D8").on('click', function(e){
       resultBox = document.getElementById("roll");
       roll = d8();
       resultBox.innerHTML = "D8 roll: " + roll;
     });
     $("#D6").on('click', function(e){
       resultBox = document.getElementById("roll");
       roll = d6();
       resultBox.innerHTML = "D6 roll: " + roll;
     });
     $("#D4").on('click', function(e){
       resultBox = document.getElementById("roll");
       roll = d4();
       resultBox.innerHTML = "D4 roll: " + roll;
     });
    // $("#Race").keyup(function() {
    //     var key = $("#Race").val();
    //     if(key.length >= minLength){
    //     	$.get("auto.php", {keyword: key} )
    //     		.done(function( data ){
    //     			console.log(data);	
    //     		});
    //     }
    // });
});
