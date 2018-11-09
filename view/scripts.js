
function checkRegister()
{
    alert("Something");
    var form = document.getElementById('register_form');

    if(form[3].value === form[4].value &&
       form[3].length === 10)
    {
        return true;
    }
    else
    {
        return false;
    }

}