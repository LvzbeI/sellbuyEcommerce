const btnSwitch=document.querySelector('#switch');
var Image_Id = document.getElementById('sellbuy');

btnSwitch.addEventListener('click', ()=>{
    document.body.classList.toggle('dark');
    btnSwitch.classList.toggle('active');
    check();
})

function check(){
    if (Image_Id.src.match("./images/logonegro.png")) {
        Image_Id.src = "./images/logoblanco.png";
    }
    else {
        Image_Id.src = "./images/logonegro.png";
    }
}


