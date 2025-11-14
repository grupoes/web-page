const login = document.getElementById('contact-form');

login.addEventListener('submit', (e) => {
    e.preventDefault();

    const formData = new FormData(login);

    fetch('./acceder', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if(data === 'no existe') {
            alert('no existe usuario o contraseña');
        } else {
            window.location.href = './admin';

        }
    })
})