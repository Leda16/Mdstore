// SCRIPT DE HOVER DAS INFOS
document.addEventListener("DOMContentLoaded", function () {
  var produtos = document.querySelectorAll(".produto");

  produtos.forEach(function (produto) {
    produto.addEventListener("mouseenter", function () {
      var imagemFrontal = produto.querySelector(".imagem-tras");
      imagemFrontal.style.opacity = "1";
    });

    produto.addEventListener("mouseleave", function () {
      var imagemFrontal = produto.querySelector(".imagem-tras");
      imagemFrontal.style.opacity = "0";
    });
  });
});
// SCRIPT DE HOVER DAS INFOS

// // SCRIPT CAPTURAR ID

// // SCRIPT CAPTURAR ID

// // SCRIPT IR SELECIONAR PRODUTO

function trocarid() {
  var elementos = document.querySelectorAll(".imagem-tras");

  elementos.forEach(function (elemento) {
    elemento.addEventListener("click", function () {
      var id = elemento.getAttribute("data-id");

      var link = "produtos.php?id=" + id;

      window.location.href = link;
    });
  });
}
// // SCRIPT IR SELECIONAR PRODUTO
