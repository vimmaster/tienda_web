


<body>
    <section>

        <div class="grid-container">

            <div class="grid-item">
                <h3>Nombre</h3>
            </div>
            <div class="grid-item">
                <h3>Precio</h3>
            </div>
            <div class="grid-item">
                <h3>Cantidad</h3>
            </div>
            <div class="grid-item">
                <h3>Subtotal</h3>
            </div>
        </div>
        <?php if(isset($_SESSION['carrito']) ){
        $productosCarrito = $_SESSION["carrito"];
        foreach ($productosCarrito as $productoCarrito): ?>
        <div class="grid-container">
            <div class="grid-item">
                <?php echo $productoCarrito['Nombre'];?>
            </div>
            <div class="grid-item">
                <?php echo $productoCarrito['Precio'];?><a>$</a>
            </div>
            <div class="grid-item">
                <?php echo $productoCarrito['Stock'];?>
            </div>
            <div class="grid-item">
                <?php echo $productoCarrito['Precio']*$productoCarrito['Stock'];?>$
            </div>

        </div>
        <?php endforeach; ?>
        <div class="grid-item">

            <h3>Total: </h3> <?php echo $_SESSION['carritoDesplegable']["Precio"];?>
        </div>
        <div class="grid-item">
            <a href="../controller/save-shopping.php"><button>Realitzar comanda</button></a>
            <a href="../controller/vaciarCarrito.php"><button>Buidar carrito </button></a>
        </div>

    </section>

</body>


<?php


}                ?>
