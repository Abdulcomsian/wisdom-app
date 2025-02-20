//-------------------//
const menuBtn = document.getElementById("menu-btn");
const menu = document.getElementById("menu");

menuBtn.addEventListener("click", () => {
  menu.classList.toggle("hidden");
});

//  ============ --------------- ============//
document.querySelectorAll(".faq-item").forEach((item) => {
  item.addEventListener("click", () => {
    const answer = item.querySelector(".answer");
    const icon = item.querySelector(".fas");
    if (answer.style.display === "none" || answer.style.display === "") {
      answer.style.display = "block";
      icon.classList.remove("fa-plus");
      icon.classList.add("fa-minus");
    } else {
      answer.style.display = "none";
      icon.classList.remove("fa-minus");
      icon.classList.add("fa-plus");
    }
  });
});
