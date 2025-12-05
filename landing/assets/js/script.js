// ====== MENU MOBILE ======
const btnMobile = document.querySelector(".btn-mobile");
const menu = document.querySelector(".menu");
const hamburguer = document.querySelector(".hamburguer");

btnMobile.addEventListener("click", () => {
  menu.classList.toggle("ativo");
  hamburguer.classList.toggle("ativo");
});

// Fecha o menu ao clicar em um link (mobile)
document.querySelectorAll(".menu a").forEach(link => {
  link.addEventListener("click", () => {
    menu.classList.remove("ativo");
    hamburguer.classList.remove("ativo");
  });
});
