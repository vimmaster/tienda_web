function checkRegister()
{
    if(document.getElementById('pswd').value ===
        document.getElementById('repeat_pswd').value)
    {
        return true;
    }
    else
    {
        return false;
    }

}

function checkEditProfile()
{
    var pswd1 = document.getElementById('pswd');
    var pswd2 = document.getElementById('repeat_pswd');

    if( pswd1.length == null && pswd2.length == null)
    {
        return true;
    }
    else if (pswd1.value === pswd2.value)
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