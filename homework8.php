<?php
$titles=['1'=>['1.1'=>['1.1.1'=>['1.1.1.1'],'1.1.2'],'1.2','1.3'],
         '2'=>['2.1','2.2'],
         '3'=>['3.1']];

function title_print($u_arr){
 foreach($u_arr as $key => $value){
  echo '<ul>' . '<li>' ;      
    if(is_array($value)){
      echo '<a href = \"#' . $key . '\">Раздел ' . $key . '</a>' . '<br/>';
      title_print($value);
    }
    else{
      echo '<a href = \"#' . $value . '\">Раздел ' . $value . '</a>' . '<br/>';
    }
  echo '</li>' . '</ul>' ;
 }
return;
}

title_print($titles);
