var gradient_percent = 0,
    gradient_offset = {
        min: -200,
        max: 400
    },
    speed = 5,
    gradient_color = 'rgba(255, 255, 255, 1)',
    empty_color = 'rgba(0, 0, 0 , 0)';

setInterval(function() {
    gradient_percent += speed;

    if (gradient_percent > gradient_offset.max) {
        gradient_percent = gradient_offset.min;
    }

    $('.text_mask').css('background-image', '-webkit-radial-gradient('+ gradient_percent +'% 50%, 3em 2em, ' + gradient_color + ' 0%, ' + empty_color + ' 100%)')
}, 17);