<!-- Ícono de carrito -->


  <!-- Mini Carrito desplegable -->
  <div id="mini-carrito" class="mini-carrito">
    <?php if (!empty($_SESSION['carrito'])): ?>
      <ul>
        <?php foreach ($_SESSION['carrito'] as $item): ?>
          <li>
            <?php echo $item['nombre']; ?> - $<?php echo $item['precio']; ?> x <?php echo $item['cantidad']; ?>
          </li>
        <?php endforeach; ?>
      </ul>
      <div class="mini-carrito-footer">
        <a href="checkout.php" class="btn-checkout">Finalizar compra</a>
      </div>
    <?php else: ?>
      <p>Tu carrito está vacío</p>
    <?php endif; ?>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.getElementById("carrito-toggle");
  const miniCarrito = document.getElementById("mini-carrito");

  toggle.addEventListener("click", function (e) {
    e.preventDefault();
    miniCarrito.style.display = (miniCarrito.style.display === "block") ? "none" : "block";
  });

  // Cerrar si clickea afuera
  document.addEventListener("click", function (e) {
    if (!toggle.contains(e.target) && !miniCarrito.contains(e.target)) {
      miniCarrito.style.display = "none";
    }
  });
});
</script>