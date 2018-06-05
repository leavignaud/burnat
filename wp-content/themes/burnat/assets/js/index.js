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

    slideshow.init()


}

var slideshow = {
    init : function(){
        var _self = this

        _self.$popin = $('.popin')
        _self.$imgC = _self.$popin.find('.img-c')
        _self.$img = _self.$popin.find('img')

        _self.$close = _self.$popin.find('.close-button')
        _self.$left = _self.$popin.find('.arrow--left')
        _self.$right = _self.$popin.find('.arrow--right')

        _self.$galeriaImages = $('.galeria-image')

        _self.resize()

        _self.imageIndex = 0

        _self.$galeriaImages.on('click', function(){
            _self.imageIndex = parseInt($(this).attr('data-index'), 10)
            _self.open($(this).attr('data-large-src'))
        })

        _self.$left.on('click', function(){
            _self.prev()
        })
        _self.$right.on('click', function(){
            _self.next()
        })
        _self.$close.on('click', function(){
            _self.close()
        })

    },
    open: function(src){
        var _self = this

        _self.$popin.stop().fadeIn()

        _self.$img.attr('src', src)

    },
    next: function(){
        var _self = this

        _self.imageIndex = _self.imageIndex < _self.$galeriaImages.length-1 ? _self.imageIndex+1 : 0;

        _self.$img.attr('src', _self.$galeriaImages.eq(_self.imageIndex).attr('data-large-src'))

    },
    prev: function(){
        var _self = this

        _self.imageIndex = _self.imageIndex > 0 ? _self.imageIndex-1 : _self.$galeriaImages.length-1;

        _self.$img.attr('src', _self.$galeriaImages.eq(_self.imageIndex).attr('data-large-src'))

    },
    close: function(){
        var _self = this

        _self.$popin.stop().fadeOut()

    },
    resize: function(){
        var _self = this

        _self.$imgC.css({lineHeight: $(window).height() + "px"})

    }
}