const formLogin = document.getElementById("formLogin");

formLogin.addEventListener("submit", (e) => {
  e.preventDefault();
  const formData = new FormData(formLogin);

  fetch("/acceder", {
    method: "POST",
    body: formData,
  })
    .then((res) => res.json())
    .then((data) => {
      if (data.status == "success") {
        location.href = "/home";
      } else {
        alert(data.msg);
      }
    });
});
