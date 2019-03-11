$('#cover-carousel').owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})

$('#home-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 7000,
    responsive: {
        0: {
            items: 1,
            loop: false
        },
        600: {
            items: 1,
            loop: false
        },
        1000: {
            items: 1,
            loop: false
        }
    }
})

$('#home-carousel-2').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoplay: true,
    autoplayTimeout: 7000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})


$(function () {
    $("#sendmessage").hide()
    $("#errormessage").hide()
    $('#content_more').hide()
    $('#uploadFileNovo').hide()
    $('#formContato').submit(function () {
        allDate = $(this).serialize()
        $.ajax({
            type: "POST",
            url: "controller/Envio.php",
            data: allDate,
            success: function (msg) {
                // alert(msg);
                if (msg == 'OK') {
                    $("#sendmessage").show()
                    $("#errormessage").hide()
                    $('#formContato').find("input, textarea").val("");
                } else {
                    $("#sendmessage").hide()
                    $("#errormessage").show()
                    $('#errormessage').html(msg);
                }
            }
        });
    })

    $('.read-more').click(function () {
        $('#content_more').show()
        $('.read-more').hide()
    })


    new WOW().init();

    $('#btn-1').mouseover(function () {
        $('#btn-1').addClass('animated bounce infinite');
    }).mouseout(function () {
        $('#btn-1').removeClass('animated bounce infinite');
    });

    $('#btn-2').mouseover(function () {
        $('#btn-2').addClass('animated bounce infinite');
    }).mouseout(function () {
        $('#btn-2').removeClass('animated bounce infinite');
    });
})