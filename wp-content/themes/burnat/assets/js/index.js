$(window).on("load", function(){

    console.log($)

    $('.grid').masonry({
        // options
        columnWidth: '.grid-sizer',
        itemSelector: '.grid-item',
        percentPosition: true
    });
} )

function myFunction() {
    var x = document.getElementById("biofrafia");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}