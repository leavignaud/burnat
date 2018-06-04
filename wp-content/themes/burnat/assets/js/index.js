$(window).on("load", function(){

    $('.grid').masonry({
        // options
        columnWidth: '.grid-sizer',
        itemSelector: '.grid-item',
        percentPosition: true
    });

    setupBio()
} )

function setupBio(){
    var isOpen = false

    var $biografia = $('#biofrafia')
    var $biografiaButton = $('#link-biografia')
    var $galeriaButton = $('#link-galeria')

    $biografiaButton.on('click', function(){
        if(isOpen){
            //on ferme bio

            $biografia.stop().fadeOut()
            isOpen = false
            $biografiaButton.removeClass("active")
            $galeriaButton.addClass("active")

        }else{
            //on ouvre bio

            $biografia.stop().fadeIn()
            isOpen = true
            $biografiaButton.addClass("active")
            $galeriaButton.removeClass("active")


        }
    })

    $galeriaButton.on('click', function(){
        $biografia.stop().fadeOut()
        isOpen = false
        $galeriaButton.addClass("active")
        $biografiaButton.removeClass("active")
    })


}

