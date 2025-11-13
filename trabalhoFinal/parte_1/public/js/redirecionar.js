
document.addEventListener("DOMContentLoaded", () => {
  let segundos = 10;
  const contador = document.getElementById('contador');

  const intervalo = setInterval(() => {
    segundos--;
    if (contador) contador.textContent = segundos;

    if (segundos <= 0) {
      clearInterval(intervalo);
      window.location.href = "../public/index.php";
    }
  }, 1000);
});