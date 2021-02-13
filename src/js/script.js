let tema=1; //1:escuro 2:claro
function mudatema(){    
    let fundo_pag= window.document.getElementsByTagName('body')[0]; 
    if(tema==1){
        fundo_pag.style.background = "var(--cor-fundo-claro)"
        tema=2
    }
    else{
        fundo_pag.style.background = "var(--cor-fundo-escuro)"
        tema=1
    }
}