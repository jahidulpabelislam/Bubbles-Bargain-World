var expand = function () {
    var height = $('section').height() + $('#header').height() + $('nav').height() + $('footer').height();
    if (height < $(window).height()) {
        $('section').height(($(window).height() - height) + $('section').height());
    }
};
window.addEventListener("load", expand);