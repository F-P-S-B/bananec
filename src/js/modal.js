document.getElementById("modal").innerHTML = `
<div id="md-bg"></div>
      <main>
        <header>Titre</header>
        <div class="body">
          <p id="description"></p>
          <div class="complementaire">
            <img src="./src/img/accueil_don.jpg" alt="" id="imageModal" />
            <div class="column">
              <h2>Prix : <span id="prix"></span></h2>
              
            </div>
          </div>
        </div>
        <footer>
          <button id="submit">Faire un don</button>
          <button id="cancel">Annuler</button>
        </footer>
      </main>`;
