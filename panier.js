// prompt("ggg");
let close = document.getElementsByClassName("btn btn-dark");
let add = document.getElementsByClassName("bi bi-plus-circle-fill");
let nbr = 0;
    (function(){
        for (let i = 0; i < close.length; i++) {
            close[i].onclick= function() {
            let tr = this.parentElement.parentElement;
            tr.className= "d-none";
          }
        }
    })()

    (function(){
        for(let j = 0 ; j < add.length; j++){
            add[j].onclick = function(){
                nbr++
                let span = document.getElementsByTagName("span");
                return span[j].innerHTML=nbr;
            }
        }
    })()