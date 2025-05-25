document.addEventListener('DOMContentLoaded', function () {
  const input = document.getElementById('search-products');
  const results = document.getElementById('products-list');

    console.log('Input event triggered');
  if (!input || !results) return;

  input.addEventListener('input', function () {
    const term = input.value.trim();

    fetch(`/wordpress/wp-json/wp/v2/product?search=${encodeURIComponent(term)}&per_page=10`)
      .then(response => response.json())
      .then(data => {
        results.innerHTML = '';

        if (data.length === 0) {
          results.innerHTML = '<p>No se encontraron productos.</p>';
          return;
        }

        data.forEach(post => {
          const div = document.createElement('div');
          div.classList.add('product-item');
          div.innerHTML = `<a href="${post.link}">${post.title.rendered}</a>`;
          results.appendChild(div);
        });
      });
  });
});