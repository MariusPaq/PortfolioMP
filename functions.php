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
