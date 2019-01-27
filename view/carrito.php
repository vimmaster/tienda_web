<DOCTYPE html>
<html>
<head>
    <?php include __DIR__.'/head.php' ?>
</head>
<body>
    <header>
        <?php include __DIR__.'/../controller/headerController.php' ?>
    </header>
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
        <?php if(isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])):
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
        <?php endif; ?>
        <div class="grid-item-carrito">
            <?php if(isset($_SESSION['ID'][0]['ID']))
            {
                $string = "";
            }
            else
            {
                $string = 'disabled';
            }
            ?>
            <a href="/controller/save-shopping.php"><button <?php echo $string ?>>
                    Realitzar comanda</button></a>
            <a href="?action=buidarCarrito"><button>Buidar carrito </button></a>
        </div>
    </section>
    <footer class="footer-principal">
        <?php include __DIR__.'/footer.php' ?>
    </footer class="footer-principal">
    </body>
</html>