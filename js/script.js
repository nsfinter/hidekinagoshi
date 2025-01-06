$(function(){

    // alert('debug');
    
    // $("#btn-nav").addClass("is-open");
    // $("#gnav").toggleClass("is-open");

    $("#btn-nav").on("click", function(){
        $("#btn-nav").toggleClass("is-open");
        $("#gnav").toggleClass("is-open");
    });

});
