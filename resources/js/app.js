require('./bootstrap');

$ = require('jquery');

$(document).ready(function () {
    $('#agefilter').change(function () {
        console.log($(this).val());
        $.ajax(
            {
                url: window.location.origin + "/api/students/age/",
                method: "POST",
                data: {
                    'age': $(this).val()
                },
                success: function (data, stato) {
                    console.log(data);
                },
                error: function (richiesta, stato, errore) {
                    alert("E' avvenuto un errore. " + errore);
                }
            }
        );
    });

    $('#rolefilter').change(function () {
        console.log($(this).val());

        $.ajax(
            {
                url: window.location.origin + "/api/students/role/",
                method: "POST",
                data: {
                    'role': $(this).val()
                },
                success: function (data, stato) {
                    console.log(data);
                },
                error: function (richiesta, stato, errore) {
                    alert("E' avvenuto un errore. " + errore);
                }
            }
        );
    });

});


