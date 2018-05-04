<?php 
  $choice = "y";

  switch($choice) {
    case "y" :
      echo "choice was y";
    break;
  
    case "Y" :
      echo "choice was Y";
    break;

    case "n" :
      echo "choice was n";
    break;

    case "N" :
      echo "choice was N";
    break;
        
    default:
      echo "choice was not 'n', 'N', 'y' or 'Y' ";
    break;
  }
?>