function filterImages() {
    const searchValue = document.getElementById('searchInput').value.toLowerCase();
    const images = document.querySelectorAll('#imagenesGaleria img');

    images.forEach(image => {
        const title = image.getAttribute('data-title').toLowerCase();
        if (title.includes(searchValue)) {
            image.style.display = 'block'; // Muestra la imagen si coincide
        } else {
            image.style.display = 'none'; // Oculta la imagen si no coincide
        }
    });
}
