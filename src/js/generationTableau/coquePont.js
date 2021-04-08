const tabPeintureList = tableau.filter((elt) => elt.ssFamille === "Peinture");

createTable("peinture", tabPeintureList);

const tabVisserieList = tableau.filter((elt) => elt.ssFamille === "visserie");

createTable("visserie", tabVisserieList);

const tabEquipPontList = tableau.filter(
  (elt) => elt.ssFamille === "Equipement de pont"
);

createTable("equipement de pont", tabEquipPontList);
