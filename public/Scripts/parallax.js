//var $window = $(window);
//var velocity = 0;

//function update() {
//    var pos = $window.scrollTop();
//    var visible;
//    var rel_position;

//    $('.container').each(function () {
//        visible = $(this).visible(true);        // true: part of this element is in viewport

//        var $element = $(this);
//        var height = $element.height();
//        var divTop = $element.parent();


//        if (visible) {
//            $(".position_index").text("Current position: " + pos);
//            $(this).css('backgroundPosition', '0% ' + Math.min(Math.round((height - pos) * velocity), 0) + 'px');
//        }
//    });
//};

//$window.bind('scroll', update);
//$(document).ready(function () {
//    update();
//});