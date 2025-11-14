const formulario = document.getElementById('contact-form');

formulario.addEventListener('submit', (e) => {
    e.preventDefault();

    const formData = new FormData(formulario);

    fetch('./saveContacto', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        
        console.log(data);

        const msg = document.getElementById('msg');

        if(data === 'ok') {

            msg.innerHTML = `<p style="color: white; margin-top: 5px">Se envio correctamente los datos, pronto te contactaremos</p>`;
            
            setTimeout(function() {
                msg.innerHTML = "";
            }, 5000);
            
            const nombre = document.getElementById('nombre');
            const correo = document.getElementById('correo');
            const celular = document.getElementById('celular');
            const carrera = document.getElementById('carrera');
            const universidad = document.getElementById('universidad');
            const ciudad = document.getElementById('ciudad');

            const post = {
                nombre: nombre.value,
                correo: correo.value,
                celular: celular.value,
                carrera: carrera.value,
                universidad: universidad.value,
                ciudad: ciudad.value
            }
            
            fetch('https://esconsultoresyasesores.com:4000/postPanel', {
                mode: 'cors',
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(post)
            })
            .then(res => res.json())
            .then(data => {
                console.log(data);
            });
            
            formulario.reset();
            
        } else {
            msg.innerHTML = `<p style="color: red; margin-top: 5px">Ocurrio un error al enviar los datos</p>`;
            
            setTimeout(function() {
                msg.innerHTML = "";
            }, 3000);
        }
    })
});