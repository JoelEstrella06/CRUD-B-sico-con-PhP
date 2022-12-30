/*const queryString = window.location.search;
    const params = new URLSearchParams(queryString);
function AjaxUSerSearch(){
    
    const User = params.get("User");
    const ps = params.get("password");
console.log(User+ "-"+ps);
}
AjaxUSerSearch();*/
const containerProducts = document.getElementById("productos");
const register=document.getElementById("btnRegister");
const formProduct = document.getElementById("form__newProduct");
function DeleteProduct(id){
    //console.log(id);
    const datos={
        tabla:'producto',
        idElemento: id};
        $.ajax({
            type:"POST",
            url:"scripts/CRUD.php",
            data:datos,
            success: function(res){
                containerProducts.innerHTML=res;               
            }
        });
}
/*register.addEventListener("click",function(){
    var datos= $("#form__newProduct").serializeArray();
    datos.push({name:'tabla', value:'newProduct'});
    console.log(datos);
    $.ajax({
        type:"POST",
        url:"scripts/CRUD.php",
        data:datos,
        success: function(res){
            containerProducts.innerHTML=res;
            //console.log(res);                   
        }
    });
   
});*/
function NewProduct(){
    var datos= $("#form__newProduct").serializeArray();
    datos.push({name:'tabla', value:'newProduct'});
    console.log(datos);
    $.ajax({
        type:"POST",
        url:"scripts/CRUD.php",
        data:datos,
        success: function(res){
            containerProducts.innerHTML=res;
            //console.log(res);                   
        }
    });
    formProduct.addEventListener("submit",(e)=>{
    e.preventDefault();
    });
};

function UpdateProduct(){
    var productValue = document.getElementById("Producto").value;
    console.log(productValue);
}