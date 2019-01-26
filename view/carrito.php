


<body>
    <section>

        <div class="grid-container-carrito">

            <div class="grid-item-carrito">
                <h3>Nombre</h3>
            </div>
            <div class="grid-item-carrito">
                <h3>Precio</h3>
            </div>
            <div class="grid-item-carrito">
                <h3>Cantidad</h3>
            </div>
            <div class="grid-item-carrito">
                <h3>Subtotal</h3>
            </div>
        </div>
        <?php if(isset($_SESSION['carrito']) ){
        $productosCarrito = $_SESSION["carrito"];
        foreach ($productosCarrito as $productoCarrito): ?>
        <div class="grid-container-carrito">
            <div class="grid-item-carrito">
                <?php echo $productoCarrito['Nombre'];?>
            </div>
            <div class="grid-item-carrito">
                <?php echo $productoCarrito['Precio'];?><a>$</a>
            </div>
            <div class="grid-item-carrito">
                <?php echo $productoCarrito['Stock'];?>
            </div>
            <div class="grid-item-carrito">
                <?php echo $productoCarrito['Precio']*$productoCarrito['Stock'];?><a>$</a>

            </div>

        </div>
        <?php endforeach; ?>
        <div class="grid-item-carrito">
            <?php if(!isset ($_SESSION['carritoDesplegable']["Precio"])){
                $_SESSION['carritoDesplegable']["Precio"]=0;
            }?>
            <h3>Total: </h3> <?php echo $_SESSION['carritoDesplegable']["Precio"];?><a>$</a>
        </div>
        <div class="grid-item-carrito">
            <a href="/controller/save-shopping.php"<button>Realitzar comanda</button>
            <a href="?action=buidarCarrito"><button>Buidar carrito </button></a>
        </div>

    </section>

</body>


<?php


}                ?>
