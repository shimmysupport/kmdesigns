jQuery(function($){

	$(function(){

        $("#typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 80,
            backDelay: 900,
            loop: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    //--------------------
    //  NAV
    //--------------------

    var navbutton = $('#menu-toggle');

    navbutton.on("click", function(e){
        e.preventDefault();
        if($(this).hasClass('active')) {
            $(this).removeClass('active');
            $('.menu').removeClass('active');
        } else {
            $(this).addClass('active');
            $('.menu').addClass('active');
        }
    });

    $('ul li.menu-item-has-children > a').after('<span class="btn-dd"></span>');

    $('.btn-dd').on('click', function() {
        $this = $(this);
        $this.toggleClass('active');
        $this.next('ul').toggleClass('active');
    });
    
});