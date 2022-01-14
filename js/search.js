$(document).ready(function(){
    $("#searchID").keyup(function(e){
        let code = e.keyCode || e.which;
            console.log(e.keycode);
            if (code==13) {
                searchProduct(); 
            }
    })

});

function searchProduct() {
    // alert("hola");
    window.location.href="results.php?text="+$("#searchID").val();
}

