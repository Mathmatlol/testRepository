var bibliotheque = [
    {titre:"1984",auteur:"George Orwell",genre:"fiction",annee:"1949"},
    {titre:"harry potter 1",auteur:"J.K.Rowling",genre:"fiction",annee:"1997"}
  ];
  console.log(bibliotheque[1]);
  function ajouterLivre(titre_, auteur_, annee_, genre_){
    bibliotheque.push({titre:titre_, auteur:auteur_, genre:genre_, annee:annee_},);
  }
  function supprimerLivre(critere, valeur){
    bibliotheque.splice(bibliotheque.findIndex(livre=>livre.critere == valeur));
  }
  function trouverLivre(critere, valeur){
    console.log(bibliotheque.findIndex(livre=>livre.critere == valeur));
    console.log(bibliotheque[(bibliotheque.findIndex(livre=>livre.critere == valeur))]);
  }
  ajouterLivre("Les Misérables", "Victor Hugo","tragédie","1862");
  console.log(bibliotheque[2]);
  supprimerLivre("titre", "Les Misérables");
  console.log(bibliotheque[2]);
  trouverLivre("auteur", "J.K.Rowling");