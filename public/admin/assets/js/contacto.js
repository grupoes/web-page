document.addEventListener("DOMContentLoaded", () => {
    renderContactos();
})

function renderContactos() {
    const tbodyContactos = document.getElementById('tbodyContactos');

    fetch(`${url_base}/contactos/render`)
        .then(response => response.json())
        .then(data => {

            let html = "";

            data.forEach(contacto => {
                html += `
                    <tr>
                        <td>${contacto.id}</td>
                        <td>${contacto.fecha}</td>
                        <td>${contacto.nombre}</td>
                        <td>${contacto.correo}</td>
                        <td>${contacto.celular}</td>
                        <td>${contacto.carrera}</td>
                        <td>${contacto.universidad}</td>
                        <td>${contacto.ciudad}</td>
                        <td>${contacto.origen}</td>
                    </tr>
                `;
            });

            tbodyContactos.innerHTML = html;
        })
        .catch(error => console.log(error));
}
