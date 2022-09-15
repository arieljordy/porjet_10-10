let eyeChange=document.getElementById("eye");
        let passwordInput = document.getElementById("mdp");
        eyeChange.addEventListener('click',function(){
          if(passwordInput.type==="password"){
            passwordInput.type="text"
            eyeChange.className="bi bi-eye-slash-fill"
          }else{
            passwordInput.type="password"
            eyeChange.className="bi bi-eye-fill"
          }
        })
document.getElementById("nom").addEventListener("input",()=>{
    if(document.getElementById("nom").value != ""){
        document.getElementById("nom").className="form-control is-valid"
    }else{
        document.getElementById("nom").className="form-control is-invalid"
    }
})

document.getElementById("prenom").addEventListener("input",()=>{
    if(document.getElementById("prenom").value != ""){
        document.getElementById("prenom").className="form-control is-valid"
    }else{
        document.getElementById("prenom").className="form-control is-invalid"
    }
})

document.getElementById("pseudo").addEventListener("input",()=>{
    if(document.getElementById("pseudo").value != ""){
        document.getElementById("pseudo").className="form-control is-valid"
    }else{
        document.getElementById("pseudo").className="form-control is-invalid"
    }
})

document.getElementById("email").addEventListener("input",()=>{
    if(document.getElementById("email").value != ""){
        document.getElementById("email").className="form-control is-valid"
    }else{
        document.getElementById("email").className="form-control is-invalid"
    }
})