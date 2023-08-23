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
// const imagens = document.querySelectorAll(".imagem-tras");

// imagens.forEach((imagem) => {
//   imagem.addEventListener("click", () => {
//     const productId = imagem.id;

//     window.location.href = `produtos.php?id=${productId}`;
//   });
// });
// // SCRIPT CAPTURAR ID

// // SCRIPT IR SELECIONAR PRODUTO
// const divs = document.querySelectorAll(".venda-img");

// divs.forEach((div) => {
//   div.addEventListener("click", () => {
//     const productId = div.id;

//     window.location.href = "/produtos.php?id=${productId}";
//   });
// });
// // SCRIPT IR SELECIONAR PRODUTO
