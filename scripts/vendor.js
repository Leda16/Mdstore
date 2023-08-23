document
  .getElementById("produto_form")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    if (confirm("Deseja realmente adicionar o produto?")) {
      var formData = new FormData(this);

      var xhr = new XMLHttpRequest();
      xhr.open("POST", "../vendor/process.php", true);
      xhr.onreadystatechange = function () {
        if (xhr.readyState == XMLHttpRequest.DONE) {
          if (xhr.status == 200) {
            alert("Produto adicionado com sucesso!");
            window.location.href = "../vendor/";
          } else {
            alert("Erro ao adicionar o produto!");
          }
        } else {
          console.error("error na requisição", xhr.status);
        }
      };

      xhr.send(formData);
    }
  });

function previewImage(event) {
  var preview = document.getElementById("preview");
  var file = event.target.files[0];
  var reader = new FileReader();

  reader.onload = function () {
    preview.src = reader.result;
    preview.style.display = "block";
  };

  if (file) {
    reader.readAsDataURL(file);
  }
}
