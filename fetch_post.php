<?php ?>
<script>
// const data = { username: "example" };

// fetch("https://ranekapi.origamid.dev/json/api/produto/", {
//   method: "POST", // or 'PUT'
//   headers: {
//     "Content-Type": "application/json",
//   },
//   body: JSON.stringify(data),
// })
//   .then((response) => response.json())
//   .then((data) => {
//     console.log("Success:", data);
//   })
//   .catch((error) => {
//     console.error("Error:", error);
//   });
  
fetch("https://ranekapi.origamid.dev/wp-json/api/produto")
  .then(response => response.json())
  .then(json => {
    console.log(json);
  });

const data = {
  id: "rafa",
  nome: "Andre",
  email: "rafa@origamid.com",
  senha: "123",
  cep: "123456",
  rua: "Ali Perto",
  numero: "230",
  bairro: "Botafogo",
  cidade: "Rio de Janeiro",
  estado: "Rio de Janeiro"
};

fetch("https://ranekapi.origamid.dev/wp-json/api/usuario", {
  method: "POST",
  mode: "cors",
  cache: "no-cache",
  credentials: "same-origin",
  headers: {
    "Content-Type": "application/json"
  },
  redirect: "follow",
  referrer: "no-referrer",
  body: JSON.stringify(data)
});