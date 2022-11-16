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
  document.getElementById("email").className="form-control is-invalid"
}
        document.querySelector("#fermer").addEventListener('click',()=>{
            passwordInput.value=""
            document.getElementById("email").value=""
            eyeChange.className=""
            passwordInput.type="password"
        })
let h3 = "SUPERBES",bas="BASKETS",i=0,j=0,ad=null;
let p = "La Bonne Qualité",au = "au Prix de vos rêves"

// titre h3 qui s'écrit seul
 
            setInterval(function(){
              if(i<h3.length && document.getElementById("h3_defilant")!=h3){
                document.getElementById("h3_defilant").innerHTML+=h3.charAt(i)
                i++
              }else if(document.getElementById("h3_defilant").innerHTML===h3){
                document.getElementById("h3_defilant").innerHTML+="<br>"
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
              }else if(document.getElementById("paragraphe_defilant").innerHTML===p){
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


document.getElementById("chaussure_homme").addEventListener(`mouseover`,()=>{
  document.getElementById("chaussure_homme")
    .style.boxShadow=`0px 0px 12px #232222`
  document.getElementById("chaussure_femme")
    .style.zIndex="1"
  document.getElementById("vetement_homme")
    .style.zIndex="1"
  document.getElementById("vetement_femme")
    .style.zIndex="1"
  document.getElementById("chaussure_homme")
    .style.zIndex="2"
  document.getElementById("chaussure_homme")
    .style.WebkitTransition=`all 200ms ease-in`
  document.getElementById("chaussure_homme")
    .style.WebkitTransform=`scale(1.5)`
  document.getElementById("chaussure_homme")
    .style.MsTransition=`all 200ms ease-in`
  document.getElementById("chaussure_homme")
    .style.MsTransform=`scale(1.5)`
  document.getElementById("chaussure_homme")
    .style.MozTransition=`all 200ms ease-in`
  document.getElementById("chaussure_homme")
    .style.MozTransform=`scale(1.5)`
  document.getElementById("chaussure_homme")
    .style.transition=`all 200ms ease-in`
  document.getElementById("chaussure_homme")
    .style.transform=`scale(1.5)`
})

document.getElementById("chaussure_femme").addEventListener(`mouseover`,()=>{
  document.getElementById("chaussure_femme")
    .style.boxShadow=`0px 0px 12px #232222`
  document.getElementById("chaussure_homme")
    .style.zIndex="1"
    document.getElementById("vetement_femme")
    .style.zIndex="1"
  document.getElementById("vetement_homme")
    .style.zIndex="1"
  document.getElementById("chaussure_femme")
    .style.zIndex="2"
  document.getElementById("chaussure_femme")
    .style.WebkitTransition=`all 200ms ease-in`
  document.getElementById("chaussure_femme")
    .style.WebkitTransform=`scale(1.5)`
  document.getElementById("chaussure_femme")
    .style.MsTransition=`all 200ms ease-in`
  document.getElementById("chaussure_femme")
    .style.MsTransform=`scale(1.5)`
  document.getElementById("chaussure_femme")
    .style.MozTransition=`all 200ms ease-in`
  document.getElementById("chaussure_femme")
    .style.MozTransform=`scale(1.5)`
  document.getElementById("chaussure_femme")
    .style.transition=`all 200ms ease-in`
  document.getElementById("chaussure_femme")
    .style.transform=`scale(1.5)`
})

document.getElementById("chaussure_homme").addEventListener(`mouseout`,()=>{
  document.getElementById("chaussure_homme")
    .style.zIndex="1"
  document.getElementById("chaussure_homme")
    .style.display=`inline-block`
  document.getElementById("chaussure_homme")
    .style.border="0"
  document.getElementById("chaussure_homme")
    .style.position=`relative`
  document.getElementById("chaussure_homme")
    .style.WebkitTransition=`all 200ms ease-in`
  document.getElementById("chaussure_homme")
    .style.WebkitTransform=`scale(1)`
  document.getElementById("chaussure_homme")
    .style.MsTransition=`all 200ms ease-in`
  document.getElementById("chaussure_homme")
    .style.MsTransform=`scale(1)`
  document.getElementById("chaussure_homme")
    .style.MozTransition=`all 200ms ease-in`
  document.getElementById("chaussure_homme")
    .style.MozTransform=`scale(1)`
  document.getElementById("chaussure_homme")
    .style.transition=`all 200ms ease-in`
  document.getElementById("chaussure_homme")
    .style.transform=`scale(1)`
})

document.getElementById("chaussure_femme").addEventListener(`mouseout`,()=>{
  document.getElementById("chaussure_femme")
    .style.zIndex="1"
  document.getElementById("chaussure_femme")
    .style.display=`inline-block`
  document.getElementById("chaussure_femme")
    .style.border="0"
  document.getElementById("chaussure_femme")
    .style.position=`relative`
  document.getElementById("chaussure_femme")
    .style.WebkitTransition=`all 200ms ease-in`
  document.getElementById("chaussure_femme")
    .style.WebkitTransform=`scale(1)`
  document.getElementById("chaussure_femme")
    .style.MsTransition=`all 200ms ease-in`
  document.getElementById("chaussure_femme")
    .style.MsTransform=`scale(1)`
  document.getElementById("chaussure_femme")
    .style.MozTransition=`all 200ms ease-in`
  document.getElementById("chaussure_femme")
    .style.MozTransform=`scale(1)`
  document.getElementById("chaussure_femme")
    .style.transition=`all 200ms ease-in`
  document.getElementById("chaussure_femme")
    .style.transform=`scale(1)`
})

document.getElementById("vetement_homme").addEventListener(`mouseover`,()=>{
  document.getElementById("vetement_homme")
    .style.boxShadow=`0px 0px 12px #232222`
  document.getElementById("vetement_femme")
    .style.zIndex="1"  
  document.getElementById("chaussure_femme")
    .style.zIndex="1"
  document.getElementById("chaussure_homme")
    .style.zIndex="1"
  document.getElementById("vetement_homme")
    .style.zIndex="2"
  document.getElementById("vetement_homme")
    .style.WebkitTransition=`all 200ms ease-in`
  document.getElementById("vetement_homme")
    .style.WebkitTransform=`scale(1.5)`
  document.getElementById("vetement_homme")
    .style.MsTransition=`all 200ms ease-in`
  document.getElementById("vetement_homme")
    .style.MsTransform=`scale(1.5)`
  document.getElementById("vetement_homme")
    .style.MozTransition=`all 200ms ease-in`
  document.getElementById("vetement_homme")
    .style.MozTransform=`scale(1.5)`
  document.getElementById("vetement_homme")
    .style.transition=`all 200ms ease-in`
  document.getElementById("vetement_homme")
    .style.transform=`scale(1.5)`
})

document.getElementById("vetement_femme").addEventListener(`mouseover`,()=>{
  document.getElementById("vetement_femme")
    .style.boxShadow=`0px 0px 12px #232222`
  document.getElementById("vetement_homme")
    .style.zIndex="1"
  document.getElementById("chaussure_homme")
    .style.zIndex="1"
  document.getElementById("chaussure_femme")
    .style.zIndex="1"
  document.getElementById("vetement_femme")
    .style.zIndex="2"
  document.getElementById("vetement_femme")
    .style.WebkitTransition=`all 200ms ease-in`
  document.getElementById("vetement_femme")
    .style.WebkitTransform=`scale(1.5)`
  document.getElementById("vetement_femme")
    .style.MsTransition=`all 200ms ease-in`
  document.getElementById("vetement_femme")
    .style.MsTransform=`scale(1.5)`
  document.getElementById("vetement_femme")
    .style.MozTransition=`all 200ms ease-in`
  document.getElementById("vetement_femme")
    .style.MozTransform=`scale(1.5)`
  document.getElementById("vetement_femme")
    .style.transition=`all 200ms ease-in`
  document.getElementById("vetement_femme")
    .style.transform=`scale(1.5)`
})

document.getElementById("vetement_homme").addEventListener(`mouseout`,()=>{
  document.getElementById("vetement_homme")
    .style.zIndex="1"
  document.getElementById("vetement_homme")
    .style.display=`inline-block`
  document.getElementById("vetement_homme")
    .style.border="0"
  document.getElementById("vetement_homme")
    .style.position=`relative`
  document.getElementById("vetement_homme")
    .style.WebkitTransition=`all 200ms ease-in`
  document.getElementById("vetement_homme")
    .style.WebkitTransform=`scale(1)`
  document.getElementById("vetement_homme")
    .style.MsTransition=`all 200ms ease-in`
  document.getElementById("vetement_homme")
    .style.MsTransform=`scale(1)`
  document.getElementById("vetement_homme")
    .style.MozTransition=`all 200ms ease-in`
  document.getElementById("vetement_homme")
    .style.MozTransform=`scale(1)`
  document.getElementById("vetement_homme")
    .style.transition=`all 200ms ease-in`
  document.getElementById("vetement_homme")
    .style.transform=`scale(1)`
})

document.getElementById("vetement_femme").addEventListener(`mouseout`,()=>{
  document.getElementById("vetement_femme")
    .style.zIndex="1"
  document.getElementById("vetement_femme")
    .style.display=`inline-block`
  document.getElementById("vetement_femme")
    .style.border="0"
  document.getElementById("vetement_femme")
    .style.position=`relative`
  document.getElementById("vetement_femme")
    .style.WebkitTransition=`all 200ms ease-in`
  document.getElementById("vetement_femme")
    .style.WebkitTransform=`scale(1)`
  document.getElementById("vetement_femme")
    .style.MsTransition=`all 200ms ease-in`
  document.getElementById("vetement_femme")
    .style.MsTransform=`scale(1)`
  document.getElementById("vetement_femme")
    .style.MozTransition=`all 200ms ease-in`
  document.getElementById("vetement_femme")
    .style.MozTransform=`scale(1)`
  document.getElementById("vetement_femme")
    .style.transition=`all 200ms ease-in`
  document.getElementById("vetement_femme")
    .style.transform=`scale(1)`
})


// document.getElementById("formulaire_connexion").addEventListener("submit",()=>{
  // fetch("traitement_connexion.php").then((response)=>{
  //   if(response===1){
  //     window.location.href="espace_client.php"

  //   }else{
  //     alert("erreur")
  //   }
  // })
//   document.getElementById("formulaire_connexion").className="row gy-4 form-floating d-none"
//   document.getElementById("spinner").className="spinner-border"
//   document.getElementById("offcanvasRightLabel").style.color="#ffde59"
//   document.getElementById("offcanvasRightLabel").innerHTML="connexion..."
// })


function effacer(){
  alert("HELLO WORLD!")
}

let tB=document.getElementById("table")

let n=1
// const son =new Audio("son.mp3") 
function nouvelElement(){
    // son.play()
    document.getElementById("article").innerHTML=n
    tB.innerHTML+=`
      <div class="alert alert-dismissible fade show" role="alert" style="background-color:#ffde59">
        <span class="mx-0">1</span>
        <span class="px-2">chaussure</span>
        <span class="px-2">$19.99</span>
        <button type="button" onclick="effacer()" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    `
}
