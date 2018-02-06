$('document').ready(function () {
    $('#login-form').validate({
        rules: {
            password: {
                required: true
            },
            user: {
                required: true
            }
        },
        messages: {
            password: {
                required: "Por favor ingresa tu contraseña"
            },
            user: "Por favor ingrese su usuario"
        },
        submitHandler: function submitForm() {
            var data = $('#login-form').serialize();
            $.ajax({
                type: 'POST',
                url: '../../App/public/login.php',
                data: data,
                beforeSend: function () {
                    $('#passerror').fadeOut();
                    $('#ingresar').html("Ingresando, Espere por favor...");
                },
                success: function (data) {
                    console.log(data);
                    if (data === "ok") {
                        $('#ingresar').html("Sesion inciada, espere por favor...");
                        setTimeout(' window.location.href = "cuenta.php"; ', 3000);
                    } else if (data.includes("<br />")) {
                        $('#passerror').fadeIn(1000, function () {
                            $('#passerror').addClass('alert-danger');
                            $('#passerror').html("No se puede conectar a la base de datos");
                            $('#ingresar').html("Ingresar");
                        })
                    }else {
                        $('#passerror').fadeIn(1000, function () {
                            $('#passerror').addClass('alert-danger');
                            $('#passerror').html("Usuario o contraseña incorrecta");
                            $('#ingresar').html("Ingresar");
                        });
                    }
                }
            });
            return false;
        }
    });
});