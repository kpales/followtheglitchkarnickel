( function( $ ) {
    $("#jobs-header").click(function(){
        $("#jobs").toggleClass("flex");
        $("#jobs-down").toggleClass("flex");
        $("#jobs-right").toggleClass("hidden");
    });

    $("#download-heading").click(function() {
        $("#download-show-hide").toggleClass("flex");
        $("#downloads-down").toggleClass("flex");
        $("#downloads-right").toggleClass("hidden");
    } );
}( jQuery ) );
