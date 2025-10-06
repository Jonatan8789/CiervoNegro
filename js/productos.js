// Inicializar Mercado Pago (Sandbox)
const mp = new MercadoPago("TEST-xxxxxxxxxxxxxxxxxxxx", { locale: "es-AR" });

// Cambio de color de prenda
document.querySelectorAll(".color").forEach(color => {
    color.addEventListener("click", function() {
        const img = this.getAttribute("data-img");
        this.closest(".producto").querySelector(".imagen-producto").src = "../assets/productos/" + img;

    });
});

// Carrito
let carrito = [];
const listaCarrito = document.getElementById("lista-carrito");
const totalEl = document.getElementById("total");

document.querySelectorAll(".agregar-carrito").forEach(btn => {
    btn.addEventListener("click", function() {
        const producto = this.closest(".producto");
        const nombre = producto.querySelector("h4").textContent;
        const precio = parseFloat(producto.dataset.precio);
        carrito.push({ nombre, precio });
        renderCarrito();
    });
});

function renderCarrito() {
    listaCarrito.innerHTML = "";
    let total = 0;
    carrito.forEach(item => {
        const li = document.createElement("li");
        li.textContent = `${item.nombre} - $${item.precio}`;
        listaCarrito.appendChild(li);
        total += item.precio;
    });
    totalEl.textContent = `$${total}`;
}

// Filtrar productos
document.getElementById("filtrar").addEventListener("click", () => {
    const categorias = [...document.querySelectorAll(".categoria:checked")].map(c => c.value);
    const min = parseFloat(document.getElementById("precio-min").value);
    const max = parseFloat(document.getElementById("precio-max").value);

    document.querySelectorAll(".producto").forEach(prod => {
        const precio = parseFloat(prod.dataset.precio);
        const categoria = prod.dataset.categoria;
        if (
            (categorias.length === 0 || categorias.includes(categoria)) &&
            precio >= min && precio <= max
        ) {
            prod.style.display = "block";
        } else {
            prod.style.display = "none";
        }
    });
});

// Checkout con Mercado Pago Sandbox
document.getElementById("checkout").addEventListener("click", async () => {
    if (carrito.length === 0) {
        alert("El carrito está vacío");
        return;
    }

    // Aquí deberías llamar a tu backend para crear la preferencia
    const preferenceId = await crearPreferencia();

   if (!preferenceId) return;

mp.checkout({
    preferenceId: preferenceId,
    autoOpen: true
});
});

// Simulación de creación de preferencia (en backend real)
async function crearPreferencia() {
    const resp = await fetch("crear_preferencia.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ items: carrito })
    });
    const data = await resp.json();
    if (data.id) {
        return data.id; // preference_id
    } else {
        alert("Error al crear preferencia");
        return null;
    }
}