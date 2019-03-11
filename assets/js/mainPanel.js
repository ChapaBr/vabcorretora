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

    //data-table
    $('#blogs').DataTable();


    $('#btnShowTrocar').click(function(){
        $('#uploadFileNovo').show()
    })
})