function checkRegister()
{
    var form = document.getElementById('register_form');

    if(form[3].value === form[4].value &&
        form[3].length >= 10)
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

    $('section#1').on('click', '.product-name', function() {
        var id = $(this).attr("id");
        $('section#1').load('controller/showProduct.php?id='+id+' #product-grid');
    });
});


$(document).ready(function(){
    $('#button-profile').click(function() {
        $('#panel-profile').slideToggle('slow');
    });
});