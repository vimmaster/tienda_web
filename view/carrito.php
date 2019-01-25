


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
                <h3>Total</h3>
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
                <?php echo $productoCarrito["Precio"];?>
            </div>
        </div>

    </section>

</body>


<?php endforeach;
/*                 {
                    $nombre = "Nombre:".$productoCarrito['Nombre'];
                    $precio = "Precio:".$productoCarrito['Precio'];
                    $cantidad = "Cantidad:".$productoCarrito['Stock'];
                    $total = $productoCarrito['Precio']*$productoCarrito['Stock'];
                    $precioTotal = "Precio Total: ". $total."$;";
                   // echo $productoCarrito['Stock'];
                    echo $nombre;
                    echo "     ";
                    echo $precio."$";
                    echo "     ";
                    echo $cantidad;
                    echo "     ";


                    }
                    echo $precioTotal;
                }

*/
}                ?>
