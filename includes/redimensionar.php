<?php

function redimensionarImagen($foto,$ancho_f,$alto_f,$desplazamiento){
	list($ancho_org, $alto_org, $nrotipo) = getimagesize($foto);
    
switch ($nrotipo) {
		case 1:
			$img_original=imagecreatefromgif($foto);
			
			break;
		case 2:
			$img_original=imagecreatefromjpeg($foto);
			break;
		case 3:
			$img_original=imagecreatefrompng($foto);
			break;	
		
		default:
			echo "archivo incorrecto";
			break;
	}
	

	$ratio_ancho=$ancho_f / $ancho_org;
	$ratio_alto=$alto_f / $alto_org;

	$ratio_max= max($ratio_ancho,$ratio_alto);

	$nuevo_ancho=$ancho_org * $ratio_max;
	$nuevo_alto= $alto_org * $ratio_max;

	$recorte_ancho=$nuevo_ancho - $ancho_f;
	$recorte_alto= $nuevo_alto - $alto_f;
	if ($desplazamiento=='center') {
		$desplazamiento=0.5;
		
	}else if($desplazamiento=='top-left'){
		$desplazamiento=0;
	}else if($desplazamiento=='bottom-right'){
		$desplazamiento=1;
	}

	$nueva_img=imagecreatetruecolor($ancho_f, $alto_f);

	imagecopyresampled($nueva_img,$img_original, -$recorte_ancho*$desplazamiento, -$recorte_alto * $desplazamiento, 0, 0, $ancho_f+$recorte_ancho, $alto_f+$recorte_alto, $ancho_org, $alto_org);
	imagedestroy($img_original);
	$calidad=70;
	$nombre_img=time()."-".$foto;
	imagejpeg($nueva_img,"../img/prod/$nombre_img",$calidad);
	return $nombre_img;	
	
}


?>