require('./bootstrap');

$ = require('jquery');

$(document).ready(function () {
    $('#agefilter').change(function () {
        console.log($(this).val());
        console.log(window.location.origin + "/students/age");

        $.ajax(
            {
                url: window.location.origin + "/students/age",
                method: "POST",
                data: {
                    'age': $(this).val()
                },
                success: function (data, stato) {
                    console.log(data);
                },
                error: function (richiesta, stato, errori) {
                    alert("E' avvenuto un errore. " + errore);
                }
            }
        );
    });

    $('#rolefilter').change(function () {
        console.log($(this).val());
    });

});


