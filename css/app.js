const tab=["moussa diouf","developpeur web et mobile","full stark"];
let postion_tab =0;  //index sur le tableau
let index= 0;        // contenu de l element chaine de caracter sur le tableau
let text_actuel="";   // la chaine ou on est dans le tableau
let letter="";      // les lettre
(
function type(){
  if(postion_tab==tab.length){   //verification si on n a pas atteint le dernier index du tableau
    postion_tab=0;    //si le dernier element du tableau est atteint on revient a la position initial
  }
  text_actuel=tab[postion_tab]; // si non on affect l element du tableau ou on est à  text_actuel
  letter=text_actuel.slice(0,++index);  //enfin affecter a letter pour ecrite
  document.querySelector(".typing").textContent=letter; // dans la classe typing
  if(letter.length === text_actuel.length){ // verification si la fin de la chaine qui slide est terminer
    postion_tab++;  //si oui on avence sur le tableau
    index=0; //et initialise le compteur index a 0;
  }
  setTimeout(type,300); //appel de la fonction sur lui meme
}()
);