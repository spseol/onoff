/* juuu.js */

$( document ).ready(function() {
    $('label:contains("On")').css("border-color", "blue");
    $('label:contains("Teach")').css("border-color", "magenta");
    $('label:contains("Off")').css("border-color", "red");

    $('#full').click(function() {
        $('input[value="full"]').prop("checked", true);
    })

    $('#on').click(function() {
        $('input[value="on"]').prop("checked", true);
    })

    $('#teach').click(function() {
        $('input[value="teach"]').prop("checked", true);
    })

    $('#off').click(function() {
        $('input[value="off"]').prop("checked", true);
    })

    $("#goo").click(function() {
        $("#submit-1").click();
    });
});

