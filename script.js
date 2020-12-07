$('.textWord_about').hide();

$('.linkw').click(function() {
    $('.textWord_about').hide();
    $('.textWord_about[data-link=' + $(this).data('link') + ']').fadeIn({
        width: '200px'
    },  300);
});

