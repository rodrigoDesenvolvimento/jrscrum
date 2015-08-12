var senha1,senha2;
function verificarSenha(frm){
    senha1=document.getElementById("senha").value;
    senha2=document.getElementById("confirmarSenha").value;
    if(senha1==senha2){
        frm.submit();
    }else{
        alert("As senha são diferentes, digite as senhas igalmente!");
        document.getElementById("confirmarSenha").focus();
    }
}


