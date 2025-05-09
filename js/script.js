// Функція добавлення класу активності
function setActive(e) {

    // Отримуємо блок з яким потрібно працювати
    const box = e.target.getAttribute('data-box-toggle');

    // Добавляємо або забираємо клас активності
    document.querySelector(box).classList.toggle('show');

    // Добавляємо кнопці клас актисності
    e.target.classList.toggle('active');
}

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("form-order-call");
  const successState = document.querySelector(".success-state");
  const modalBody = document.querySelector(".modal-body");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    // Отримання значень з форми
    const formdata = new FormData(form);

    // Відправка POST-запиту на API
    fetch("https://api.dveripidloga.com/sendemail/", {
      method: "POST",
      body: formdata,
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error("Network response was not ok");
        }
        return response.json(); // Якщо API повертає JSON
      })
      .then((data) => {
        // При успіху показати success block
        form.classList.add("d-none");
        successState.classList.remove("d-none");
        console.log("Success:", data);
      })
      .catch((error) => {
        console.error("Error:", error);
        alert("Ein Fehler ist aufgetreten. Bitte versuchen Sie es erneut.");
      });
  });
});

