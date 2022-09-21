//Tous ce qui est en rapport avec les mots de passe

let eyeChange=document.getElementById("eye");
let passwordInputRetype=document.getElementById("mdp2");
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
      passwordInputRetype.type="text"
      eyeChange.className="bi bi-eye-slash-fill"
    }else{
      passwordInput.type="password"
      passwordInputRetype.type="password"
      eyeChange.className="bi bi-eye-fill"
    }
  })

function eyeOff(){
  eyeChange.className=""
  passwordInput.type="password"
  document.getElementById("nom").className="form-control is-invalid"
  document.getElementById("email").className="form-control is-invalid"
}

document.getElementById("nom").addEventListener("input",()=>{
    if(document.getElementById("nom").value != ""){
        document.getElementById("nom").className="form-control is-valid"
    }else{
        document.getElementById("nom").className="form-control is-invalid"
    }
})

// document.getElementById("prenom").addEventListener("input",()=>{
//     if(document.getElementById("prenom").value != ""){
//         document.getElementById("prenom").className="form-control is-valid"
//     }else{
//         document.getElementById("prenom").className="form-control is-invalid"
//     }
// })

// document.getElementById("pseudo").addEventListener("input",()=>{
//     if(document.getElementById("pseudo").value != ""){
//         document.getElementById("pseudo").className="form-control is-valid"
//     }else{
//         document.getElementById("pseudo").className="form-control is-invalid"
//     }
// })

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
