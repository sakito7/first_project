function mostrarVideojuegos() {
    const lista = document.getElementById('lista-videojuegos');
    videojuegos.forEach(videojuego => {
        const li = document.createElement('li');
        li.textContent = videojuego;
        lista.appendChild(li);
    });
}

window.onload = mostrarVideojuegos;