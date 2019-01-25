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







//XAVI


function carregarProductes(idCategoria){
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "../../controller/listarProductos.php?idCat="+ idCategoria, true);
    xmlhttp.send();

    xmlhttp.onreadystatechange = function ()
    {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById("Productes").innerHTML = xmlhttp.responseText;
        }
    }
}



function carregaCategoria($categoria){
    var xmlhttp;
    if(window.XMLHttpRequest){ //tots els navegadors
        xmlhttp = new XMLHttpRequest();
    }else{ //IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById("Producto").innerHTML = xmlhttp.responseText;
        }
    }
    $categoria = document.getElementById("Categories");
    xmlhttp.open("GET","../controller/listarProductos.php?categoria="+ tagCategories.value, true);
    xmlhttp.send();
}


function carregaProducte($categoria){
    var xmlhttp;
    if(window.XMLHttpRequest){ //tots els navegadors
        xmlhttp = new XMLHttpRequest();
    }else{ //IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById("Producto").innerHTML = xmlhttp.responseText;
        }
    }
    $categoria = document.getElementById("Categories");
    xmlhttp.open("GET","../controller/listarProductos.php?categoria="+ tagCategories.value, true);
    xmlhttp.send();
}

function validarRegistre() {
    var nom = document.forms["registre"]["nom"].value;
    var password = document.forms["registre"]["password"].value;
    var password2 = document.forms["registre"]["password2"].value;
    var email = document.forms["registre"]["email"].value;
    var adreca = document.forms["registre"]["adreca"].value;
    var poblacio = document.forms["registre"]["poblacio"].value;
    var cP = document.forms["registre"]["cP"].value;
    var posArr = email.indexOf("@");
    var posPunt = email.lastIndexOf(".");
    if (nom == "" || password == "" || password2 == "" || email == "" || adreca == "" || poblacio == "" || cP == "") {
        alert("Cap camp pot ser buit");
        return false;
    }else if(password != password2){
        alert("Les contrassenyes no coincideixen");
        return false;
    }else if(cP.length != 5){
        alert("El codi postal ha de tenir longitud 5");
        return false;
    }else if (posArr<1 || posPunt<posArr+2 || posPunt+2>=email.length) {
        alert("Email incorrecte");
        return false;
    }else {
        return true;
    }
}

function imprimirAlert(imprimir){
    alert(imprimir);
}