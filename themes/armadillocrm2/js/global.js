$(document).ready(function () {
    //var a = 0;
    var $animated = $('div[class*="animate"]');
    $animated.each(function () {
        var $self = $(this),
            oTop = $self.offset().top - window.innerHeight;
        if (($(window).scrollTop() > oTop)) {
            if ($self.hasClass('counterTrigger') && !$self.hasClass('seen')){
                counter($self);
            }else{
                $self.addClass('seen');
            }
        }
        $(window).scroll(function () {
            if (($(window).scrollTop() > oTop)) {
                if ($self.hasClass('counterTrigger') && !$self.hasClass('seen')){
                    counter($self);
                    $self.addClass('seen');
                }else if(!$self.hasClass('seen')){
                    $self.addClass('seen');
                }
            }
        });
    });
});

function counter($self){
    var $elem = $self.find('.counter-value'),
        countTo = $elem.attr('data-count');
    $({
        countNum: $elem.text()
    }).animate({
        countNum: countTo
    },
    {
        duration: 2000,
        easing: 'swing',
        step: function () {
            $elem.text(Math.floor(this.countNum));
        },
        complete: function () {
            $elem.text(this.countNum);
        }

    });
}