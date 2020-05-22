var pseudo=document.getElementById("pseudo");
var commentaire=document.getElementById("area");
var submit=document.getElementById("submit");
var reponse=document.getElementById("reponse");

submit.addEventListener("click",function() {
    var requete=new XMLHttpRequest();
    requete.open('POST','controleurEvenement.php');
    requete.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    requete.send('pseudo='+pseudo.value+'&area='+commentaire.value);
    
    requete.onreadystatechange=function envoie(data) {
        if(requete.readyState==4 && requete.status==200){
            reponse.textContent=requete.responseText;
        }
    }
});