// disable context menu
$(function() {
    "use strict";
    /* disable right click */
    $(document).on("contextmenu",function(e){
        return false;
    });
});

$(function(){
    /* Resolve conflict in jQuery UI tooltip with Bootstrap tooltip */
    //$.widget.bridge('uibutton', $.ui.button);
});

// accordion
$(function(){
    "use strict";
    // Add minus icon for collapse element which is open by default
    $(".collapse.in").each(function(){
        $(this).siblings(".panel-heading").find(".glyphicon").addClass("glyphicon-minus").removeClass("glyphicon-plus");
    });
    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
        $(this).parent().find(".glyphicon").removeClass("glyphicon-plus").addClass("glyphicon-minus");
    }).on('hide.bs.collapse', function(){
        $(this).parent().find(".glyphicon").removeClass("glyphicon-minus").addClass("glyphicon-plus");
    });
});

// ajax function
/*
$(function(){
    "use strict";
    $(document).bind("ajaxStart", function(event, request, settings){
        hideTooltipAndPopover();
        $('#container_fluid').loading('start');
    }).bind("ajaxStop", function(event, request, settings){
        $('#container_fluid').loading('stop');
    });
});
*/

//lazy load
$(function() {
    $('.lazy').Lazy();
});