/*const queryString = window.location.search;
    const params = new URLSearchParams(queryString);
function AjaxUSerSearch(){
    
    const User = params.get("User");
    const ps = params.get("password");
console.log(User+ "-"+ps);
}
AjaxUSerSearch();*/
const containerProducts = document.getElementById("productos");
function DeleteProduct(id){
    console.log(id);
    const datos={
        tabla:'producto',
        idElemento: id};
        $.ajax({
            type:"POST",
            url:"scripts/delete.php",
            data:datos,
            success: function(res){
                containerProducts.innerHTML=res;               
            }
        });
}