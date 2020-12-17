<?php include 'header.php' ?>
<div id="home" class="home">
  <h1 class="ml11">
    <span class="text-wrapper">
      <span class="line line1"></span>
      <span class="letters">Marius PAQUET</span>
    </span>
  </h1>
  <h3 class="ml13">Portfolio</h3>
</div>

  <div id="aPropos" class="diapo aPropos">
    <h2 class="whiteFont">A Propos</h2>
    <div class="parallax" id="p5"></div>
    <div class="parallax" id="p2"></div>
    <div class="aProposBack">
      <div id="linkPropos" class="row">
        <span class="btn-grad" id="btnparcours"><p id="txtbtnparcours">Mon Parcours</p></span>
        <span class="btn-grad" id="btnhobbies"><p id="txtbtnhobbies">Hobbies</p></span>
      </div>



        <div class="contentPropos" id="parcours" >
          <div class="row">
            <div class="col-7">
              <p id="presentation">
                Ayant toujours été attirés par les metiers de l'informatiques j'ai effectué un Baccalauréat STI2D option Systèmes d’information et numérique. Je me suis ensuite dirigé vers un DUT Informatique à l'Université de Bourgogne à dijon.
                <br>
                Lors de mon stage de DUT que j'ai effectué dans l'entreprise Effalia, j'ai découvert le webdesigne et web developement dans un milieux proffessionelle, ce qui m'a poussé à effectuer une formation de webdesigner à ONLINEFORMATPRO ACS DIJON qui se déroule en ce moment.
                </p>
            </div>
            <div class="col-5">
              <img src="img/PP.jpg" alt="moi" id="PP">
            </div>
        </div>
      </div>


      <div class="contentPropos" id="hobbies">
        <div class="row">
          <div class="col-7">
            <p id="txtHobbies">
              <ul>
                <li>Dessin: Je dessine depuis maintenant de nombreuse année de façon ponctuelle, au début sur feuille et maintenant sur tablette ou tablette graphique.</li>
                <li>Production musicale assister par ordinateur: depuis maintenant 6 mois j'apprends la production musicale sur ordinateur en autodidacte.</li>
                <li>Découverte de musique: j'écoute beaucoup de musique et suis toujours à la recherche de nouveaux styles et artistes à écouter.</li>
              </ul>
            </p>
          </div>
          <div class="col-5">
            <img src="img/imgDrow1min.png" alt="Drow">
            <img src="img/imgDrow2min.png" alt="Drow">
          </div>
        </div>
      </div>



    </div>
    <div class="curiVita">
      <a href="img/cv-page-001.jpg" id="btCv" class="btn-grad"><p id="txtbtCv">Curriculum Vitae</p></a>
      <div class="linkHub">
        <a href="https://fr.linkedin.com/in/marius-paquet"><img src="img/QRLink.png" alt="QR Code Linkedin" class="qrCode" id="qrLink"></a>
        <a href="https://github.com/MariusPaq"><img src="img/QRGit.png" alt="QR Code github" class="qrCode" id="qrGit"></a>
      </div>
    </div>
    <div class="parallax" id="p1"></div>
    <div class="parallax" id="p3"></div>
    <div class="parallax" id="p4"></div>
  </div>

  <div id="competences" class="diapo competences">
    <h2 class="whiteFont">Competences</h2>
    <div class="competencesContain">
      <div class="competencesBack">
        <div class="parallax2" id="p11"></div>
        <div class="d-flex justify-content-center">
          <?php createCardComp('HTML/CSS','img/html.png'); ?>
          <?php createCardComp('JavaScript','img/javascript.png'); ?>
        </div>
        <div class="d-flex justify-content-center">
          <?php createCardComp('PHP','img/php.png'); ?>
          <?php createCardComp('PL/SQL','img/sql.png'); ?>
          <?php createCardComp('Java','img/java.png'); ?>
        </div>
      </div>
      <div class="parallax2" id="p6"></div>
      <div class="parallax2" id="p7"></div>
      <div class="parallax2" id="p8"></div>
      <div class="competencesBack2">
        <p>Je souhaite me tourner plus vers la programmations Front-End mais sans délaisser le Back-End, je suis à l'aise avec la Programmations Orienter objet ( POO, COO ) ainsi que le PL/SQL.</p>
      </div>
      <div class="parallax2" id="p9"></div>
      <div class="parallax2" id="p10"></div>
    </div>
  </div>

  <div id="projet" class="diapo projet">
    <h2 class="whiteFont">Projets</h2>
    <div class="parallax4" id="p13"></div>
    <div class="parallax4" id="p12"></div>
    <div class="d-flex justify-content-center"  id="dflexproj1">
      <?php createCardProjet('Projet WordPress',"Développement d'un outil de communication sur Wordpress ayant vocation à sensibiliser sur l'importance de l'égalité femmes / hommes en contexte professionnel, en abordant le problème sous différents angles",'id1',"Projet réaliser en groupe de trois avec Adeline Levionnois et Louis Meunier sur une durée d'une semaine, création d’une maquette ainsi qu’un cahier des charges et ensuite un développement en local puis une mise en ligne du site.",'WPE1.PNG','WPE2.PNG','<a href="https://mariusp.promo-42.codeur.online/egalitehf/">Egalité Homme Femme<a>'); ?>
      <?php createCardProjet('Flappy Bird','Création d’un jeu Flappy Bird en native JavaScript en duo avec Julie Boulenger. ','id2','Premier Projet en groupe effectuer à ONLINEFORMATPRO sur le langage JS.','FB1.jpg','FB2.jpg','<a href="https://mariusp.promo-42.codeur.online/flappyBirds/">Play</a>'); ?>
      <?php createCardProjet('BigBlueButton',"Initialisation d'un serveur OVH avec Ubuntu 16.04 et installation d'une plateforme de visioconférence 'BigBlueButton' pour l'entreprise Bien-Encré sur le dit serveur.",'id3',"Projet réaliser en groupe de quatre pour le stage de la formation à ONLINEFORMATPRO dans l'entreprise 'Bien-Encré' avec Adeline Levionnois, Tsiry Trafanoharantsoa et Dimitri Hoerth.",'BBB1.PNG','BBB2.PNG'); ?>
    </div>
    <div class="d-flex justify-content-center"  id="dflexproj2">
      <?php createCardProjet('Design Explorateur Fichiers ',"Création de maquette pour un explorateur de fichiers interactive avec Adobe XD ",'id4','Premier projet et découverte du logiciel Adobe XD.','',''); ?>
      <?php createCardProjet('Design Boulangerie',"Création d'une maquette pour une boulangerie avec le logiciel Photoshop.",'id5',"Premier maquette réaliser à ONLINEFORMATPRO avec le logiciel Photoshop.",'B1.PNG','boulangerie.jpg'); ?>
    </div>
    <div class="parallax4" id="p14"></div>
    <div class="parallax4" id="p15"></div>
  </div>

<?php include 'footer.php' ?>
