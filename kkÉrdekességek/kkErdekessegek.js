function vissza() {
    var vissza = document.getElementsByTagName("textarea")[0];
    if(vissza.value === 'vissza') 
    open("https://fradi575.github.io/keletiKiralyKobra/");
}

var input = document.getElementById("myInput");

input.addEventListener("keypress", function(event) {
  
  if (event.key === "Enter") vissza();

});