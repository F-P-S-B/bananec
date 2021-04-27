const headerContent = `
<header id="masthead" class="site-header" role="banner">
    <div class="site-branding">
        <h1 class="site-title">
          <a href="http://bananec.fr/" rel="home"> Bananec </a>
        </h1>
        <p class="site-description">
          Découvrez les étapes de la rénovation de Bananec, cotre des Glénans de
          1963
        </p>
      </div>
      <!-- .site-branding -->

      <nav id="site-navigation" class="main-navigation" role="navigation">
        <button
          class="menu-toggle"
          aria-controls="primary-menu"
          aria-expanded="false"
        >
          Menu
        </button>
        <div class="primary-menu">
          <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
            <li
              id="menu-item-490"
              class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-490"
            >
              <a href="http://bananec.fr">Accueil</a>
            </li>
            <li
              id="menu-item-501"
              class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-has-children menu-item-501"
              aria-haspopup="true"
            >
              <a href="http://bananec.fr/?page_id=498">Qui sommes-nous ?</a>
              <ul class="sub-menu">
                <li
                  id="menu-item-662"
                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-662"
                >
                  <a href="http://bananec.fr/?page_id=659">Le bateau</a>
                </li>
                <li
                  id="menu-item-663"
                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-663"
                >
                  <a href="http://bananec.fr/?page_id=511">L’équipe</a>
                </li>
              </ul>
            </li>
            <li
              id="menu-item-496"
              class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-496"
            >
              <a href="http://bananec.fr/?cat=12">Travaux</a>
            </li>
            <li
              id="menu-item-495"
              class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-495"
            >
              <a href="http://bananec.fr/?cat=11">Histoire</a>
            </li>
            <li
              id="menu-item-976"
              class="menu-item menu-item-type-custom menu-item-object-custom menu-item-976"
            >
              <a
                href="http://bananec.fr/don"
                >Faites un don</a
              >
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <p
        style="
          position: relative;
          top:9vh;
          background-color: lighten(gray, 30%);
          font-size: 1.5rem;
          text-align: center;
        "
      >
        Sélectionnez une catégorie pour définir à quoi servira votre don
      </p>

`;

window.addEventListener("load", () => {
  window.innerWidth > 1050
    ? (document.getElementById("header").innerHTML = headerContent)
    : (document.getElementById("header").innerHTML = "");
});
window.addEventListener("resize", () => {
  window.innerWidth > 1050
    ? (document.getElementById("header").innerHTML = headerContent)
    : (document.getElementById("header").innerHTML = "");
});
