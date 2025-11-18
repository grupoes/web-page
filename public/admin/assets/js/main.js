const url_base = document.getElementById('url_basic').value;

function logout() {
    fetch(`${url_base}/logout`)
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                window.location.href = `${url_base}panel`;
            }
        })
        .catch(error => console.log(error));
}