const search = () => {
    const searchWrapper = document.querySelector(".search");
    const searchbox = document.getElementById("search-item").value.toUpperCase();
    const storeitems = document.getElementById("product-list-search")
    const product = document.querySelectorAll(".se-product")
    const pname = storeitems.getElementsByTagName("h2")

    for(var i = 0; i < pname.length; i++) {
        let match = product[i].getElementsByTagName('h2')[0];

        if(match) {
            let textvalue = match.textContent || match.innerHTML


            if (textvalue.toUpperCase().indexOf(searchbox) > -1) {
                product[i].style.display = "";
                storeitems.style.display = "inline";     
                
            }
            
            else {
                product[i].style.display = "none";
            }
        }
        
       
        
    }

}

var modal = document.getElementById('product-list-search');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}