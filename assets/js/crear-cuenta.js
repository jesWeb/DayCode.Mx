//enviar formulario a la base de datos
var formulario_cuenta = document.getElementById("formulario-login-cuenta");

formulario_cuenta.addEventListener("submit", function (e) {
  e.preventDefault();

  var datos = new FormData(formulario_cuenta);

   console.log(datos);
  // console.log(datos.get('password'))
  // console.log(datos.get('email'))
  //  console.log(datos.get('desc'))
  //  console.log(datos.get('fecha'))

  fetch("../user/procesos/crear-cuenta.php", {
    method: "POST",
    body: datos,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
      if (data === "error") {
        Swal.fire("Error", "Revise los datos ingresados", "error");
      } else if (data === "success") {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Te has registrado exitosamente',
            showConfirmButton: false,
            timer: 1500
          })
      }
      
    });
});