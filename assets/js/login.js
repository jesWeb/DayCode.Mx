//enviar formulario a la base de datos
var formulario_logeo = document.getElementById("formulario-login");

formulario_logeo.addEventListener("submit", function (e) {
  e.preventDefault();

  var datos = new FormData(formulario_logeo);

   console.log(datos);
  // console.log(datos.get('password'))
  // console.log(datos.get('email'))
  //  console.log(datos.get('desc'))
  //  console.log(datos.get('fecha'))

  fetch("../user/procesos/login.php", {
    method: "POST",
    body: datos,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
      if (data === "error") {
        Swal.fire("Error", "Revise los datos ingresados", "error");
      } else {
        let timerInterval;
        Swal.fire({
          title: "Estas siendo x redirigido!",
          text: "Te has loegeado exitosamente...",
          html: "I will close in <b></b> milliseconds.",
          timer: 2000,
          timerProgressBar: true,
          didOpen: () => {
            Swal.showLoading();
            const b = Swal.getHtmlContainer().querySelector("b");
            timerInterval = setInterval(() => {
              b.textContent = Swal.getTimerLeft();
            }, 100);
          },
          willClose: () => {
            clearInterval(timerInterval);
          },
        }).then((result) => {
          /* Read more about handling dismissals below */
          if (result.dismiss === Swal.DismissReason.timer) {
            console.log("I was closed by the timer");
            window.location.href =
<<<<<<< HEAD
              "http://localhost/DayCode.Mx/index.php";
=======
              '/index.php';
>>>>>>> f241c944b3c1710b1adf54fd501c2a06216e4019
          }
        });
      }
    });
});