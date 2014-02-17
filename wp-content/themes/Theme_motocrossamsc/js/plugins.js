// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }

    $('.slider_').bxSlider({
         mode:'fade',
         slideMargin:0,
         speed:1000,
         auto:true,
         pager:false,
         controls:false
     });

 /*window.addEvent('domready', function(){
    var mf = new MooFlow($('mooFlow'), {
        startIndex: 5,
        useSlider: true,
        useAutoPlay: true,
        useCaption: true,
        useResize: true,
        useWindowResize: true,
        useMouseWheel: true,
        useKeyInput: true
    });
});*/

}());

