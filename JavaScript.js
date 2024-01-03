let miImage = document.querySelector("img");
miImage.onclick = function () {
  let miSrc = miImage.getAttribute("src");
  if (miSrc === "images/firefox-icon.png") {
    miImage.setAttribute("src", "images/firefox2.png");
  } else {
    miImage.setAttribute("src", "images/firefox-icon.png");
  }
};

function multiplica(num2, num2) {
  let resultado = num2 * num2;
  return resultado;
}

     