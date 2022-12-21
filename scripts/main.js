const queryString = window.location.search;
    const params = new URLSearchParams(queryString);
function AjaxUSerSearch(){
    
    const User = params.get("User");
    const ps = params.get("password");
console.log(User+ "-"+ps);
}
AjaxUSerSearch();