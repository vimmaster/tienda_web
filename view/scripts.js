function checkRegister()
{
    var form = document.getElementById('register_form');

    if(form[5].value === form[6].value)
    {
        return true;
    }
    else
    {
        return false;
    }

}

function checkLogin()
{
    var form = document.getElementById('login_form');

    return true;
}


$(document).ready(function(){
    $('.categ-item').click(function() {
        var id = $(this).attr("id");
        $('section#1').load('controller/listarProductos.php?id='+id+' #products-grid');
    });

    $('section#1').on('click', '.product-item', function() {
        var id = $(this).parent().attr("id");
        $('section#1').load('controller/showProduct.php?id='+id+' #product-grid');
    });
});


$(document).ready(function(){
    $('#button-profile').click(function() {
        $('#panel-profile').slideToggle('slow');
    });
});