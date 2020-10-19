<?php

function createCardComp($title,$img){
  echo '
  <div class="cardComp '.$title.'">
    <div class="topCardComp">
      <h5>'.$title.'</h5>
      <img src="'.$img.'" alt="imgComp">
    </div>
  </div>
  ';
}

function createCardProjet($title,$desc,$id){
  echo '
    <div class="cardProj" id="'.$id.'">
      <div class="hover">
        <a href="#"><h5 class="titleCardProj">'.$title.'</h5><a>
        <div class="descCardProj">
          <p class="pCardProj">'.$desc.'<p>
        </div>
      </div>
    </div>
  ';
}
?>
<script type="text/javascript">
$(document).ready(function( $ ){
  var title = $('.titleCardProj');
  var desc = $('.pCardProj');
  var hoverProj = $('.hover');
  hoverProj.hover(
    function(){
      $(this).css('background-color','rgba(0,0,0,0.6)');
      $(this).find("a").css('color','white');
      $(this).find("p").css('display','block');
    },
    function (){
      $(this).css('background-color','rgba(0,0,0,0)');
      $(this).find("a").css('color','#212529');
      $(this).find("p").css('display','none');
    }
  );

});
</script>
