

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>

    <link rel="stylesheet" href="carrito.css" media="screen" title="no title" charset="utf-8">
    <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
    <meta name="robots" content="noindex,follow" />
</head>
<body>
<div class="shopping-cart">

    <div class="title">
        Shopping Bag
    </div>


    <div class="item">

        <div class="buttons">
            <span class="delete-btn"></span>
            <span class="like-btn"></span>
        </div>

        <div id="<?php echo $producto['ID']?> class="image">
            <img src="<?php echo $product['Imagen']?>" alt="" />
        </div>

        <div id="<?php echo $producto['ID'] ?> class="description">
            <span> <?php echo $producto['Nombre'] ?> </span>

        </div>

        <div class="quantity">
            <button class="plus-btn" type="button" name="button">
                <p>+</p>
            </button>
            <input type="text" name="name" value="1">
            <button class="minus-btn" type="button" name="button">
                <p>-</p>
            </button>
        </div>

        <div class="total-price"><?php echo $producto['Precio']?>$</div>
    </div>

    <script type="text/javascript">
        $('.minus-btn').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest('div').find('input');
            var value = parseInt($input.val());

            if (value > 1) {
                value = value - 1;
            } else {
                value = 0;
            }

            $input.val(value);

        });

        $('.plus-btn').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest('div').find('input');
            var value = parseInt($input.val());

            if (value < 100) {
                value = value + 1;
            } else {
                value =100;
            }

            $input.val(value);
        });

        $('.like-btn').on('click', function() {
            $(this).toggleClass('is-active');
        });
    </script>
</body>
</html>



