document.getElementById("button").addEventListener("click", function(){
    document.querySelector(".popup").style.height = "160px";
})

document.querySelector(".popup").addEventListener("click", function(){
    document.querySelector(".popup").style.height = "0px";
})