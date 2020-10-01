$(document).ready(function(){
    console.log($(window).scrollHeight);
    if ($(window).scrollTop() >= 200) {
        $("nav").css("top", "0");

        }else {
        $("nav").css("top", "35px")
    }
})

