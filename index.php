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
        <span class="btn-grad" id="btnambitions"><p id="txtbtnambitions">Ambitions</p></span>
      </div>



        <div class="contentPropos" id="parcours" >
          <div class="row">
            <div class="col-7">
              <p id="presentation">
                Ayant toujours été attirés par les metiers de l'informatiques j'ai effectué un Baccalauréat STI2D option Systèmes d’information et numérique. Je me suis ensuite dirigé vers un DUT Informatique à l'Université de Bourgogne à dijon.
                <br>
                Lors de mon stage de DUT que j'ai effectué dans l'entreprise Effalia, j'ai découvert le webdesigne et web developement dans un milieux proffessionelle, ce qui m'a poussé à effectuer une formation de webdesigner à ONLINEFORMATPRO ACS DIJON qui se déroule en ce moment.
                <br>
                Actuellement je suis à la recherche d’un stage non-rémunérer d’une durée de 2 mois en temps que « Designer/Développeur Web » à compter du 4 Novembre au 8 Janvier, afin de valider ma formation « Designer Web » à L’Access code school OnlineFormatPro Dijon.</p>
            </div>
            <div class="col-5">
              <img src="img/PP.jpg" alt="moi" id="PP">
            </div>
        </div>
      </div>


      <div class="contentPropos" id="hobbies">
        <div class="row">
          <div class="col-7">
            <p id="txtHobbies">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero orci, posuere a odio at, pulvinar pharetra turpis. Pellentesque fringilla tortor vitae leo feugiat, non congue mauris sagittis. Fusce commodo congue ligula, a efficitur diam rhoncus id. Phasellus sollicitudin enim at elementum tincidunt. Donec in nunc ornare, fringilla est sit amet, scelerisque mauris. Donec maximus, ipsum eu ultrices facilisis, velit urna dapibus massa, at auctor dolor elit quis velit. Mauris sem justo, fermentum ullamcorper sem at, tempus viverra sapien. Vivamus quis egestas leo, at volutpat quam. Cras luctus cursus vestibulum. Mauris eu orci pulvinar, molestie sapien sed, dictum lacus. Cras tellus nisl, cursus sed ligula a, ultrices interdum leo. Vestibulum pretium nibh vitae mattis congue. Vivamus consectetur iaculis vehicula. </p>
          </div>
          <div class="col-5">
            <img src="img/imgDrow1min.png" alt="Drow">
            <img src="img/imgDrow2min.png" alt="Drow">
          </div>
        </div>
      </div>


      <div class="contentPropos" id="ambitions">
        <div class="row">
          <div class="col-7">
            <p id="txtAmbitions">Duis ex tortor, mollis sit amet mollis et, eleifend in sem. Quisque laoreet nibh non ornare tempor. Nulla facilisi. Donec vitae dictum felis, ut sollicitudin turpis. Quisque at velit eget magna elementum commodo quis ut diam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean placerat elit eget sodales viverra. Cras posuere vestibulum ipsum, sed molestie augue porta nec. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris et aliquam nisl, vel molestie nulla. Nam condimentum ante vel venenatis tristique. </p>
          </div>
          <div class="col-5">
            <img src="img/goal.png" alt="goal">
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
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero orci, posuere a odio at, pulvinar pharetra turpis. Pellentesque fringilla tortor vitae leo feugiat, non congue mauris sagittis. Fusce commodo congue ligula, a efficitur diam rhoncus id. Phasellus sollicitudin enim at elementum tincidunt. Donec in nunc ornare, fringilla est sit amet, scelerisque mauris. Donec maximus, ipsum eu ultrices facilisis, velit urna dapibus massa, at auctor dolor elit quis velit.</p>
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
      <?php createCardProjet('Projet WordPress','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero orci, posuere a odio at, pulvinar pharetra turpis. Pellentesque fringilla tortor vitae leo feugiat, non congue mauris sagittis.','id1','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero orci, posuere a odio at, pulvinar pharetra turpis. Pellentesque fringilla tortor vitae leo feugiat, non congue mauris sagittis.','','','<a href="https://mariusp.promo-42.codeur.online/egalitehf/">Egalité Homme Femme<a>'); ?>
      <?php createCardProjet('Flappy Bird','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero orci, posuere a odio at, pulvinar pharetra turpis. Pellentesque fringilla tortor vitae leo feugiat, non congue mauris sagittis.','id2','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero orci, posuere a odio at, pulvinar pharetra turpis. Pellentesque fringilla tortor vitae leo feugiat, non congue mauris sagittis.','','','<a href="https://mariusp.promo-42.codeur.online/flappyBirds/">Play</a>'); ?>
      <?php createCardProjet('Portfolio','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero orci, posuere a odio at, pulvinar pharetra turpis. Pellentesque fringilla tortor vitae leo feugiat, non congue mauris sagittis.','id3','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero orci, posuere a odio at, pulvinar pharetra turpis. Pellentesque fringilla tortor vitae leo feugiat, non congue mauris sagittis.','',''); ?>
    </div>
    <div class="d-flex justify-content-center"  id="dflexproj2">
      <?php createCardProjet('Design Explorateur Fichiers','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero orci, posuere a odio at, pulvinar pharetra turpis. Pellentesque fringilla tortor vitae leo feugiat, non congue mauris sagittis.','id4','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero orci, posuere a odio at, pulvinar pharetra turpis. Pellentesque fringilla tortor vitae leo feugiat, non congue mauris sagittis.','',''); ?>
      <?php createCardProjet('Design Boulangerie','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero orci, posuere a odio at, pulvinar pharetra turpis. Pellentesque fringilla tortor vitae leo feugiat, non congue mauris sagittis.','id5','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero orci, posuere a odio at, pulvinar pharetra turpis. Pellentesque fringilla tortor vitae leo feugiat, non congue mauris sagittis.','',''); ?>
    </div>
    <div class="parallax4" id="p14"></div>
    <div class="parallax4" id="p15"></div>
  </div>

<?php include 'footer.php' ?>
