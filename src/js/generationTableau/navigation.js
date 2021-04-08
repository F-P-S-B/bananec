const tabSecuriteList = tableau.filter((elt) => elt.ssFamille === "Sécurité");

createTable("sécurité", tabSecuriteList);

const tabFeuxList = tableau.filter((elt) => elt.ssFamille === "Feux");

createTable("feux", tabFeuxList);

const tabLivresList = tableau.filter((elt) => elt.ssFamille === "Livres");

createTable("livres", tabLivresList);

const tabCartesList = tableau.filter((elt) => elt.ssFamille === "Cartes");

createTable("cartes", tabCartesList);

const tabOutilsList = tableau.filter(
  (elt) => elt.ssFamille === "Outils de navigation"
);

createTable("outils de navigation", tabOutilsList);
