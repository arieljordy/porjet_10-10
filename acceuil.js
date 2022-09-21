//Tous ce qui est en rapport avec les mots de passe

let eyeChange=document.getElementById("eye");
let passwordInput = document.getElementById("mdp");
passwordInput.addEventListener("input",() =>{
  if(passwordInput.value===""){
    eyeChange.className=""
  }else if(passwordInput.type==="password"){
    eyeChange.className="bi bi-eye-fill"
  }else if(passwordInput.type==="text"){
    eyeChange.className="bi bi-eye-slash-fill"
  }
})
eyeChange.addEventListener("click",() =>{
    if(passwordInput.type==="password"){
      passwordInput.type="text"
      eyeChange.className="bi bi-eye-slash-fill"
    }else{
      passwordInput.type="password"
      eyeChange.className="bi bi-eye-fill"
    }
  })

function eyeOff(){
  eyeChange.className=""
  passwordInput.type="password"
}
        document.querySelector("#fermer").addEventListener('click',()=>{
            passwordInput.value=""
            document.getElementById("email").value=""
            eyeChange.className=""
            passwordInput.type="password"
        })
         let h3 = "SUPERBES",bas="BASKETS",i=0,j=0,id=ad=null;
         let p = "La Bonne Qualité",au = "au Prix de vos rêves"

// titre h3 qui s'écrit seul
 
              id = setInterval(function(){
              if(i<h3.length && document.getElementById("h3_defilant")!=h3){
                document.getElementById("h3_defilant").innerHTML+=h3.charAt(i)
                i++
              }else{
                clearInterval(id)
                document.getElementById("h3_defilant").innerHTML+="<br>"
                clearInterval(id)
              }
            },250)
            setTimeout(() => {
              setInterval(() => {
                if(j<bas.length){
                  document.getElementById("h3_defilant").innerHTML+=bas.charAt(j)
                  j++
                }
              },250)
            }, 3000)
    
// paragraphe qui s'écrit seul

let k=0;let l=0;
ad = setInterval(function(){
              if(k<p.length && document.getElementById("paragraphe_defilant")!=p){
                document.getElementById("paragraphe_defilant").innerHTML+=p.charAt(k)
                k++
              }else{
                clearInterval(ad)
                document.getElementById("paragraphe_defilant").innerHTML+="<br>"
                clearInterval(ad)
              }
            },80)
            setTimeout(() => {
              setInterval(() => {
                if(l<au.length){
                  document.getElementById("paragraphe_defilant").innerHTML+=au.charAt(l)
                  l++
                }
              },50)
            }, 4000)
            
function checkEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

document.getElementById("email").addEventListener("input",()=>{
    if(document.getElementById("email").value != "" && checkEmail(document.getElementById("email").value)){
        document.getElementById("email").className="form-control is-valid"
    }else{
        document.getElementById("email").className="form-control is-invalid"
    }
})