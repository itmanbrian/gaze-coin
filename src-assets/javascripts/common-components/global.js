var myLazyLoad = new LazyLoad({
    elements_selector: ".lazy"
});

var myLazyLoad_Images = new LazyLoad();



$("#time-remaining").countdown("2017/11/28 21:00", function(event) {
    $(this).html(
        event.strftime(''
            + '<div class="clock-count days"><h3>%D</h3> <h4>DAYS</h4></div>'
            + '<div class="clock-count hours"><h3>%H</h3> <h4>HOURS</h4></div>'
            + '<div class="clock-count mins"><h3>%M</h3> <h4>MINS</h4></div>'
            + '<div class="clock-count secs"><h3>%S</h3> <h4>SECS</h4></div>'
        )
    );
});
$(function() {
    $('.btn-aware-position').on('mouseenter', function(e) {

            var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
            $(this).find('span').css({top:relY, left:relX})
        })
        .on('mouseout', function(e) {
            var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
            $(this).find('span').css({top:relY, left:relX})
        });
});