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
                user: "Por favor ingrese su usuario",

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
                        if (data === "ok") {
                            $('#ingresar').html("Sesion inciada, espere por favor...");
                            setTimeout(' window.location.href = "cuenta.php"; ', 3000);
                        } else if (data.includes("<br />")) {
                            $('#passerror').fadeIn(1000, function () {
                                $('#passerror').addClass('alert-danger');
                                $('#passerror').html("No se puede conectar a la base de datos");
                                $('#ingresar').html("Ingresar");
                            })
                        } else {
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
        $('#register-form').validate({
            messages: {
                pass: "Por favor escriba una contraseña",
                user: "Por favor ingrese su usuario",
                pass2: "Por favor escriba la misma contraseña anterior",
                apellido: "Por favor ingrese su apellido",
                email: "Por favor ingrese su correo",
                sexo: "Por favor seleccion su sexo",
                nombre: "Por favor ingrese su nombre",
                cedula: "Por favor ingrese su cedula"
            },
            submitHandler: function registerForm() {
                var data = $('#register-form').serialize();
                $.ajax({
                    type: 'POST',
                    url: '../../App/public/registroAjax.php',
                    data: data,
                    beforeSend: function () {
                        $('#passerrorRe').fadeOut();
                        $('#btn-registrar').html("Registrando, Espere por favor...");
                    },
                    success: function (data) {
                        if (data === "ok") {
                            $('#btn-registrar').html("Cuenta creada correctamente, inicie sesion");
                            $('#passerrorRe').fadeIn(1000, function () {
                                $('#passerrorRe').removeClass('alert-danger').addClass('alert-success');
                                $('#passerrorRe').html("Gracias por registrarse con nosotros, por favor inicie sesion");
                            });
                            setTimeout(' window.location.href = "index.php"; ', 5000);
                        } else if (data.includes("<br />")) {
                            $('#passerrorRe').fadeIn(1000, function () {
                                $('#passerrorRe').addClass('alert-danger');
                                $('#passerrorRe').html("No se puede conectar a la base de datos");
                                $('#btn-registrar').html("Registrar cuenta...");
                            })
                        } else if (data === "Ya existe una cuenta con esta cedula") {
                            $('#passerrorRe').fadeIn(1000, function () {
                                $('#passerrorRe').addClass('alert-danger');
                                $('#passerrorRe').html("Ya existe una cuenta con esta cedula");
                                $('#btn-registrar').html("Registrar cuenta");
                            });
                        } else if (data === "Ya existe una cuenta con este nombre de usuario") {
                            $('#passerrorRe').fadeIn(1000, function () {
                                $('#passerrorRe').addClass('alert-danger');
                                $('#passerrorRe').html("Ya existe una cuenta con este nombre de usuario");
                                $('#btn-registrar').html("Registrar cuenta");
                            });
                        }
                    }
                })
            }
        });
    }
);


$('#regresar').click(function () {
    window.history.back();
});

