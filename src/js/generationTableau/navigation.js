const tabSecuriteList = tableau.filter((elt) => elt.ssFamille === "Sécurité");

createTable("sécurité", tabSecuriteList);

const tabFeuxList = tableau.filter((elt) => elt.ssFamille === "Feux");

createTable("feux", tabFeuxList);

const tabCartesList = tableau.filter(
  (elt) => elt.ssFamille === "Cartes" || elt.ssFamille === "Livres"
);

createTable("cartes et livres", tabCartesList);

const tabOutilsList = tableau.filter(
  (elt) => elt.ssFamille === "Outils de navigation"
);

createTable("outils de navigation", tabOutilsList);
