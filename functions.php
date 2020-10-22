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

function createCardProjet($title,$desc,$id,$desc2,$img1,$img2,$other=false,$other2=false){
  echo '
    <div class="cardProj" id="'.$id.'">
      <div class="hover">
        <a href="" data-toggle="modal" data-target="#modale'.$id.'"><h5 class="titleCardProj">'.$title.'</h5><a>
        <div class="descCardProj">
          <p class="pCardProj">'.$desc.'<p>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modale'.$id.'" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">'.$title.'</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>'.$desc.'</p>
            <img src="img/'.$img1.'"></img>
            <p>'.$desc2.'</p>
            <img src="img/'.$img2.'"></img>
            <div>'.$other.'</div>
            <div>'.$other2.'</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
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
