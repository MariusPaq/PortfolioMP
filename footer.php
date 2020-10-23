      </div>
      <div class="shadowFooter"></div>
      <footer class="footer parallax3">
        <span id="btn-Up"><p id="txtUp">Up</p></span>
        <div class="navFooter">
          <a href="#aPropos">A propos de moi</a>
          <a href="#competences">Compétences</a>
          <a href="#projet">Projets</a>
        </div>
        <p id="pfooter">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero orci, posuere a odio at, pulvinar pharetra turpis. Pellentesque fringilla tortor vitae leo feugiat, non congue mauris sagittis. Fusce commodo congue ligula, a efficitur diam rhoncus id. Phasellus sollicitudin enim at elementum tincidunt. Donec in nunc ornare, fringilla est sit amet, scelerisque mauris. Donec maximus, ipsum eu ultrices facilisis, velit urna dapibus massa, at auctor dolor elit quis velit.</p>
        <div class="row linkFooter">
          <a href="https://fr.linkedin.com/in/marius-paquet"><img src="img/QRLink.png" alt="QR Code Linkedin" class="qrCode" id="qrLinkf"></a>
          <a href="https://github.com/MariusPaq"><img src="img/QRGit.png" alt="QR Code github" class="qrCode" id="qrGitf"></a>
          <a href="img/cv-page-001.jpg" id="btCvf" class="btn-grad"><p id="txtbtCvf">Curriculum Vitae</p></a>
        </div>
        <div id="mentionsl">
          <a  href="mentionsLegales.php">Mentions légales</a>
        </div>

      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
      <script src="script.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>

<script>
  jQuery(document).ready(function( $ ){
    var btnUp = $('#btn-Up');

    $(window).scroll(function() {
     if ($(window).scrollTop() > 300) {
       btnUp.addClass('show');
     } else {
       btnUp.removeClass('show');
     }
   });

   btnUp.on('click', function(e) {
     e.preventDefault();
     $('html, body').animate({scrollTop:0}, '300');
   });
  });
</script>
