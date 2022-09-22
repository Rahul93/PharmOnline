
$('.user_toggle').on('click', function () {
    $('.user_container').addClass('hidden');
    $('.user_container[data-container="'+$(this).attr('data-type')+'"]').removeClass('hidden');
});
