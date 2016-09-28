<?php
// Define o tamanho do cartao
	$imgWidth=423;
	$imgHeight=247;

// recebe a cartao de fundo
	$imgResource = ImageCreateFromJPEG("img.jpg");

// Define a cor
	$textcolor = imagecolorallocate($imgResource, 0,0, 0);


 // carregar fontes...
	$fnormal = 'local da fonte/Arial.ttf';
	$fnegrito = 'local da fonte/Arial_Bold.ttf';
	$fnegritoeitalico = 'local da fonte/Arial_Bold_Italic.ttf';


// Texto que será escrito na imagem
	$nome = $_POST['nome'];
	$nomesize="14";
	$setor = $_POST['setor'];
	$setorsize = "11";
	$ramal = "Fone: (XX) 1212-2323  Ramal: ". $_POST['ramal'];
	$ramalsize = "10";
	$endereco = "Endereço tal Caixa Postal: 0XX - Cidade - Estado ";
	$endsize = "8.55";

	$textnome=imagettfbbox($nomesize , $rotation , $fnegrito , $nome );
	$textsetor=imagettfbbox($setorsize , $rotation , $fnegrito , $setor );
	$textramal=imagettfbbox($ramalsize , $rotation , $fnegrito , $ramal );
	$textend=imagettfbbox($endsize , $rotation, $fnegrito , $endereco );


// Faz o calculo do eixo x
	$xnome=  $imgWidth/2 - ($textnome[4]-$textnome[0])/2 ;
	$xsetor=  $imgWidth/2 - ($textsetor[4]-$textsetor[0])/2;
	$xramal=  $imgWidth/2 - ($textramal[4]-$textramal[0])/2 ;
	$xend=  $imgWidth/2 - ($textend[4]-$textend[0])/2 ;	

// Escreve na tela
	imagettftext($imgResource, $nomesize, 0,$xnome, 192, $textcolor,$fnegritoeitalico, $nome);
	imagettftext($imgResource, $setorsize, 0, $xsetor, 208, $textcolor,$fnegrito, $setor);
	imagettftext($imgResource, $ramalsize, 0, $xramal, 225, $textcolor,$fnegrito, $ramal);
	imagettftext($imgResource, $endsize, 0, $xend, 242, $textcolor,$fnegrito, $endereco);

	
// Header informando que é uma imagem JPEG
	header( 'Content-type: image/jpeg' );

// Envia a imagem para o borwser ou arquivo
	imagejpeg( $imgResource, NULL, 80 );
/* @Parametros
 * $imagem - Imagem previamente criada Usei imagecreatefromjpeg
 * NULL - O caminho para salvar o arquivo.
          Se não definido NULL a imagem será mostrado no browser.
 * 80 - Qualidade da compresão da imagem.
 */
?>
