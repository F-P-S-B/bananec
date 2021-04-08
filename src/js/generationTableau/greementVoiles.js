const tabCordagesList = tableau.filter((elt) => elt.ssFamille === "Cordages");

createTable("cordages", tabCordagesList);

const tabTaquetsList = tableau.filter((elt) => elt.ssFamille === "Taquets");

createTable("taquets", tabTaquetsList);

const tabManillesList = tableau.filter(
  (elt) => elt.ssFamille === "Manilles/Mousquetons"
);

createTable("manilles et mousquetons", tabManillesList);
