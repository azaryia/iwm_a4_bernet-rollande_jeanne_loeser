$.ajaxSetup({
    headers: {
        'X-CSRF-Token': $('meta[name="csrf_token"]').attr('content')
    }
});

$( document ).ready(function() {
    var body = $( "body" );
    body.on( "mouseover", ".movieblock", function() {
        var overlayclass = 'movieinfo'+$(this).data('id');
        var overlay = $('.'+overlayclass);
        overlay.css('opacity', '1');
        overlay.css('height', '100%');
    });
    body.on( "mouseleave", ".movieblock", function() {
        var overlayclass = 'movieinfo'+$(this).data('id');
        var overlay = $('.'+overlayclass);
        overlay.css('opacity', '0');
        overlay.css('height', '0');
    });

    // When clicking on "I want to see this movie
    body.on( "click", ".tosee-btn", function(e) {
        e.preventDefault();
        var form = $('#tosee'+$(this).data('movie'));
        console.log('#tosee'+$(this).data('movie'));
        console.log(form.attr('action'));
        $.ajax({
            type: "POST",
            url: form.attr('action'),
            data: form.serialize(),
            success: function( data ) {
                console.log( 'To see added' );
                console.log( data );
            }
        });
        return false;
    });

    // When clicking on "I have seen this movie
    body.on( "click", ".seen-btn", function(e) {
        e.preventDefault();
        var form = $('#seen'+$(this).data('movie'));
        console.log('#seen'+$(this).data('movie'));
        console.log(form.attr('action'));
        $.ajax({
            type: "POST",
            url: form.attr('action'),
            data: form.serialize(),
            success: function( data ) {
                console.log( 'Seen added' );
                console.log( data );
            }
        });
        return false;
    });


    // Search bar
    $('#searchbar').on('keypress', function (e) {
    console.log(e.keyCode );
        if(e.keyCode  === 13 && $(this).val()){
            window.location.replace($(this).data('path')+'/'+$(this).val());
        }
    });
});