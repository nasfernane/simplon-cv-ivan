// On sélectionne le bouton
const btn = document.querySelector(".switch_theme_color");
// On récupère le thème dans le link css avec l'id #theme-link
const theme = document.querySelector("#theme-link");

// On active la fonction au click sur le bouton
btn.addEventListener("click", function () {
  // Si l'URL contient "css/index_light.css"
  if (theme.getAttribute("href") == "css/index_light.css") {
    // ... Alors on bascule sur "css/index_dark.css"
    theme.href = "css/index_dark.css";
    // Sinon...
  } else {
    // ...on passe en mode clair
    theme.href = "css/index_light.css";
  }
});
