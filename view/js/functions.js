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