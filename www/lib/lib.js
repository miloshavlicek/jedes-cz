$(document).ready(function () {
    $('#logo').mouseover(function () {
        $('#head-menu').show(200);
    });

    $('#header').mouseleave(function () {
        $('#head-menu').hide(200);
    });
});