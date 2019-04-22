   function afficher1(){
  document.getElementById('date_cloture').style.display ='none';
}
function afficher2(){
  document.getElementById('date_cloture').style.display = 'block';
}
function controle()
{
    
    var nom = form_event.nom.value ;
    var ville = form_event.ville.value ;
    var etat = form_event.etat.value ;
    var addr = form_event.addr.value ;
    var desc = form_event.desc.value ;
    var date_d = form_event.date_d.value ;
    var date_f = form_event.date_f.value ;
    var fin_insc = form_event.fin_insc.value ;
    var date_sys = new Date('DD-MM-YYYY',0);

 
    var alphaExp = /^[a-zA-Z]+$/;

    
    if((nom.length<3) || (!(form_event.nom.value.match(alphaExp))))
    {
        alert("Nom invalide !");
    }

   
    if ((ville.length<3) || (!(form_event.ville.value.match(alphaExp))))
    {
        alert("Ville invalide !");
    }


    if ((etat.length<3) || (!(form_event.etat.value.match(alphaExp))))
    {
        alert("Etat invalide !");
    }


  
    if (addr.length<5)
    {
        alert("Addresse invalide !");
    }
    if (desc.length<10) 
    {
        alert("Description invalide !");
    }

    
    if (date_sys<date_d)
    {
        alert("Date de debut invalide !")
    }
    if (date_f<date_d)
    {
        alert("Date de fin invalide !")
    }
    if ((fin_insc<date_d ) || (fin_insc>date_f))
    {
        alert("Date de cloture invalide !")
    }

}
