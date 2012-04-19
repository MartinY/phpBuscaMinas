<?php

if (isset($_GET['showsource'])) {
   show_source($_SERVER['PHP_SELF']);
   exit;
}

/* INICIO - Seccion 1: Imagenes */

if (isset($_GET['imagen'])) {

 //algoritmo para la obtencion de las imagenes en base64
 /*
 $directorio = './buscaminas/';
 $dir = opendir($directorio);
 while ($file = readdir($dir)) {
    if (($data = @getimagesize($directorio.$file)) && ($data[2] = (1 OR 2 OR 3))) {
       $ifp = fopen($directorio.$file, "rb");
       $img_data = fread($ifp, filesize($directorio.$file));
       fclose($ifp);
       $ifp = fopen($directorio.$file.'.txt', "wb" );
       fwrite($ifp, chunk_split(base64_encode($img_data)));
       fclose($ifp);
       echo 'Fichero: '.$file.'<br />';
    }
 }
 closedir($dir);
 */
   
 unset($imagenes);
 $imagenes[-3] = 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAA3NCSVQICAjb4U/gAAAACXBIWXMA'.
                     'AAsSAAALEgHS3X78AAAAFnRFWHRDcmVhdGlvbiBUaW1lADExLzA1LzA1M7To9wAAACV0RVh0U29m'.
                 'dHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgTVggMjAwNId2rM8AAABpSURBVHicnZJRDgARDESH'.
                 '9F7m6NOT2Q+xiSXo+iKdl0cr1Vpxvdw9h9KS7D0cAUkA1oZCFnJZsjm69wyGY/oLuBQDGrPH1o92'.
                 '.KYWAmIEkybaZq/aJzjD6yH5eaTDooq2G/qsuDTmUBvAAbFIrt2c9B9IAAAAASUVORK5CYII=';
 $imagenes[-2] = 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAA3NCSVQICAjb4U/gAAAACXBIWXMA'.
                 'AAsSAAALEgHS3X78AAAAFnRFWHRDcmVhdGlvbiBUaW1lADEwLzMxLzA1XQEOxAAAACV0RVh0U29m'.
                 'dHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgTVggMjAwNId2rM8AAAA6SURBVHicY/z//z8D0eDg'.
                 'wYNMJKk+cOAAC5xDUMOBAwcYGBhIsAECRjWMFA0sDLBURawNJKlmYGAAABNOF3CuOP9xAAAAAElF'.
                 'TkSuQmCC';
 $imagenes[-1] = $imagenes[-2];
 $imagenes[0] = 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAA3NCSVQICAjb4U/gAAAACXBIWXMA'.
                'AAsSAAALEgHS3X78AAAAFnRFWHRDcmVhdGlvbiBUaW1lADEwLzMxLzA1XQEOxAAAACV0RVh0U29m'.
                'dHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgTVggMjAwNId2rM8AAAAiSURBVHicY2xoaGAgBbAw'.
                'MDA4ODgQr4GJJONHNYxqGEgNAPKoAmKExjrTAAAAAElFTkSuQmCC';
 $imagenes[1] = 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAA3NCSVQICAjb4U/gAAAACXBIWXMA'.
                'AAsSAAALEgHS3X78AAAAFnRFWHRDcmVhdGlvbiBUaW1lADEwLzMxLzA1XQEOxAAAACV0RVh0U29m'.
                'dHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgTVggMjAwNId2rM8AAABTSURBVHictdDBCQAgCAVQ'.
                'C/fqj+ZotlmHLhFmWeRN+E/RJCIUKSYiAOcgh8Z7AChAOQVmdAmctAH8tAFUq2oNgG39Bzz109G9'.
                'Ha963uC/6GZDGDS/NBCjDGUqiwAAAABJRU5ErkJggg==';
 $imagenes[2] = 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAA3NCSVQICAjb4U/gAAAACXBIWXMA'.
                'AAsSAAALEgHS3X78AAAAFnRFWHRDcmVhdGlvbiBUaW1lADEwLzMxLzA1XQEOxAAAACV0RVh0U29m'.
                'dHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgTVggMjAwNId2rM8AAABfSURBVHicpZHBDcAwCANJ'.
                'xWCMxmiMlk/VIDAoqP6CfRYsVaWJmIhE5N7wjOJfwicxjDIxQKi2w4jz2OflFIZ7jQAhZ/ssYAg1'.
                'Arm7Eix5DFWH0tCgfMSPT1+edUwYGzZvrh10+OEv0AAAAABJRU5ErkJggg==';
 $imagenes[3] = 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAA3NCSVQICAjb4U/gAAAACXBIWXMA'.
                'AAsSAAALEgHS3X78AAAAFnRFWHRDcmVhdGlvbiBUaW1lADEwLzMxLzA1XQEOxAAAACV0RVh0U29m'.
                'dHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgTVggMjAwNId2rM8AAABVSURBVHicY2xoaGAgBbAw'.
                'MDA4ODgQr4GJJOOhNkCAPW57Dh44QJoNyGYhbEA2Bo+1FPgBj6kk+4GADcjmQWyzd3CAC9ImHpAB'.
                'UTYgO5JAPJBpA0UaADKgF253aqXDAAAAAElFTkSuQmCC';
 $imagenes[4] = 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAA3NCSVQICAjb4U/gAAAACXBIWXMA'.
                'AAsSAAALEgHS3X78AAAAFnRFWHRDcmVhdGlvbiBUaW1lADEwLzMxLzA1XQEOxAAAACV0RVh0U29m'.
                'dHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgTVggMjAwNId2rM8AAABRSURBVHicY2xoaGAgBbAw'.
                'MDA4ODgQr4GJJOOhNiADB4cDEMaBAw7IbPJtQNGA1Uh8GkizAW48hI3GJd8GRChhupsGoUQTDegx'.
                'jQywxgbtnQQALJIW6PmY/I8AAAAASUVORK5CYII=';
 $imagenes[5] = 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAA3NCSVQICAjb4U/gAAAACXBIWXMA'.
                'AAsSAAALEgHS3X78AAAAFnRFWHRDcmVhdGlvbiBUaW1lADEwLzMxLzA1XQEOxAAAACV0RVh0U29m'.
                'dHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgTVggMjAwNId2rM8AAABOSURBVHicY2xoaGAgBbAw'.
                'MDA4ODgQr4GJJOOhNkDAAbz2OBw4QLENmIZhBdSwAdMzyHYSZQOyEQgbsDod0zaaxQNpNiC7loAf'.
                'yLSBIg0ALn8TLnvj/Q8AAAAASUVORK5CYII=';
 $imagenes[6] = 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAA3NCSVQICAjb4U/gAAAACXBIWXMA'.
                'AAsSAAALEgHS3X78AAAAFnRFWHRDcmVhdGlvbiBUaW1lADEwLzMxLzA1XQEOxAAAACV0RVh0U29m'.
                'dHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgTVggMjAwNId2rM8AAABYSURBVHicY2xoaGAgBbAw'.
                'MDA4ODgQr4GJJOOhNsCBw4EDWBUdQHICwgZcqvHZgGkeJqDMDxCA6TbsfsADkI0g4AdM22jjB+w2'.
                '4AlNZCkWXBKEbSASkKwBAIV7Fa7eYNRHAAAAAElFTkSuQmCC';
 $imagenes[7] = 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAA3NCSVQICAjb4U/gAAAACXBIWXMA'.
                'AAsSAAALEgHS3X78AAAAFnRFWHRDcmVhdGlvbiBUaW1lADEwLzMxLzA1XQEOxAAAACV0RVh0U29m'.
                'dHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgTVggMjAwNId2rM8AAABOSURBVHicY2xoaGAgBbAw'.
                'MDA4ODgQr4GJJOOhNkAAfnsOHDhAsQ1wM5ABprUk24BPA9x4ZMupZwNW46lnAy7jybGBBaso1jgh'.
                '0waSNQAAMIQTqJLdnTYAAAAASUVORK5CYII=';
 $imagenes[8] = 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAA3NCSVQICAjb4U/gAAAACXBIWXMA'.
                'AAsSAAALEgHS3X78AAAAFnRFWHRDcmVhdGlvbiBUaW1lADEwLzMxLzA1XQEOxAAAACV0RVh0U29m'.
                'dHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgTVggMjAwNId2rM8AAABiSURBVHicpZJRDsAgCEPZ'.
                '4sF6NI7Wo/mxBYngJrGfFl5t9FJVqaiJCID9hbuEfxNMJNMhf4WRsJqerBZtz4uUgw4AHl6k5h3K'.
                'CQaOHUja4dk7TFGpRsLHB/FWWxn/CZsqL3SSSR+uY+UYoAAAAABJRU5ErkJggg==';
 $imagenes[9] = 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAA3NCSVQICAjb4U/gAAAACXBIWXMA'.
                'AAsSAAALEgHS3X78AAAAFnRFWHRDcmVhdGlvbiBUaW1lADEwLzMxLzA1XQEOxAAAACV0RVh0U29m'.
                'dHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgTVggMjAwNId2rM8AAABwSURBVHicpZHBDcAwCAOh'.
                'ymAejdG8GXmkqqoAEVV5RcBhcNTM5EsMEQHQB66qUE0pgZbCmgogPnKAZNwEAMmTgru7e8wnQCdG'.
                'nKGqsW81kLyBteXhQ54z/tn6dqPK7y5FZvNazSxdPYV3hU6UQHXPBO64MCL0GczyAAAAAElFTkSu'.
                'QmCC';
 $imagenes[10] = 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAA3NCSVQICAjb4U/gAAAACXBIWXMA'.
                 'AAsSAAALEgHS3X78AAAAFnRFWHRDcmVhdGlvbiBUaW1lADEwLzMxLzA1XQEOxAAAACV0RVh0U29m'.
                 'dHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgTVggMjAwNId2rM8AAABjSURBVHicpZBRCsAwCEPj'.
                 '8N7z5unPJqxqUZaPUmyf0YiZYSIFcE+Yq3qQKdBykPeMlxxgNokAPDuQJBnrCdCRxh4iSUKPuQMM'.
                 '2CYf8V+sLD6dUorMlrXGTr4Pv/XEoaMSqPZZDqEXJxDzeG0AAAAASUVORK5CYII=';
 $imagenes['cara_feliz'] = 'iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAIAAABLixI0AAAAA3NCSVQICAjb4U/gAAAACXBIWXMA'.
                           'AAsSAAALEgHS3X78AAAAFnRFWHRDcmVhdGlvbiBUaW1lADEwLzMxLzA1XQEOxAAAACV0RVh0U29m'.
                           'dHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgTVggMjAwNId2rM8AAADKSURBVHicvZRREoMwCEQX'.
                           'x4Nxs3g0PBn9YJoqQrA1U8afMOFlswZo2zZMihVAa+05aN/35TnFQCKyHtc/s0QEwBxdFmu5g5mv'.
                           'Er5mGUX1lCTijJjekZlVPcjQql7siGWgQYS4gFWCMlzxH4lAlC4LXTdFhdKKN+G442NmvtV/sTKb'.
                           's7xniUjfqhqUEX1cIzo1QO29ww3sD+54lIZ30/TvKNB1ZeyXw13jCkpZHRf6FYIw9ssKbMi4ZBj1'.
                           'LBwUxywb/jdrslhmgQC8AC9naM6s7HJuAAAAAElFTkSuQmCC';
 $imagenes['cara_triste'] = 'iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAIAAABLixI0AAAAA3NCSVQICAjb4U/gAAAACXBIWXMA'.
                            'AAsSAAALEgHS3X78AAAAFnRFWHRDcmVhdGlvbiBUaW1lADEwLzMxLzA1XQEOxAAAACV0RVh0U29m'.
                            'dHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgTVggMjAwNId2rM8AAADUSURBVHicvZTRDYRACEQH'.
                            'Y2F0pqVhZdwHiYfAop7mJsZElJeZZV1a1xUvaQawLMtz0LZt03OKgURk9s8/s0QEwDu+TPPpF8yc'.
                            'LdxmGUX1UCTiEXGYkZlVI8jQqtFsxzJQoxJXsHYQ0fdu8pWM6+aoCqJDzFzpWD6dtQVfvhKsnfgC'.
                            'oi+kyV5i3dV/971fL4wDIvsSkbzY/gpv/Q/QZSzHH3CdL29tFGffyeGvrH2FpFkZNGTtuEy0YnlO'.
                            'dHO0BjtkQrHU+Z5ommuWHf4Xe0aa3gIB+ABUUHrGhlfs9wAAAABJRU5ErkJggg==';
 $imagenes['cara_susto'] = 'iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAIAAABLixI0AAAAA3NCSVQICAjb4U/gAAAACXBIWXMA'.
                           'AAsSAAALEgHS3X78AAAAFnRFWHRDcmVhdGlvbiBUaW1lADExLzAxLzA1vNZ/oAAAACV0RVh0U29m'.
                           'dHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgTVggMjAwNId2rM8AAADlSURBVHicrZTREYQgDEQ3'.
                           'joXRGdBZrCz3EYfDQIJ3ul8Y5c3CJlIpBS9pB5Bzfg46jmN7TlEQM+/9898sZgbwji/VvvwipTRa'.
                           '+JmlFJFLkSh5RPeMKSURC1K0iDUbsRQUaIqbsBqoVhCh1u+rvjLiohx1Ivq5GCsRqz/dkmWsRTnm'.
                           'DDNdYyXy9UTrXgVAdC7icNe+WmptfZfFzM2FqpQTJGITJLoMwNpXKecZidxucFnGmganlT5EY8r1'.
                           'ZXA6g/3FjyCX1XDm7pQyBSHuCd2gPxlTnGrdX8HmOUt//jf3eNreAgH4ACoeeNAP5vm1AAAAAElF'.
                           'TkSuQmCC';
 if (isset($imagenes[$_GET['imagen']])) {
   header('Content-type:image/png');
   echo base64_decode($imagenes[$_GET['imagen']]);
   exit;
 }
 else {
   header("HTTP/1.0 404 Not Found");
   exit;
 }
}

/* FIN - Seccion 1: Imagenes */


/* INICIO - Seccion 2: Estilo CSS */

if (isset($_GET['css'])) {
   // sin uso de momento
   header('Content-type: text/css');
   exit;
}

/* FIN - Seccion 2: Estilo CSS */


/* INICIO - Seccion 3: Clase phpBuscaMinas */

class phpBuscaMinas
{

  var $tablero_juego,$tablero_mostrar;
  var $n_minas;
  var $mtiempo;

  // constructor de la clase; 
  function phpBuscaMinas ($x=10, $y=10, $n_minas=10)
  {
    $this->n_minas = $n_minas;
    $this->mtiempo = time();
    //  generamos el tablero de juego
    if( $x*$y <= $n_minas ) return;
    $rx = rand(0,$x-1);
    $ry = rand(0,$y-1);
    while( $n_minas > 0 )
    {
      if( !isset($this->tablero_juego[$ry][$rx]) )
      {
        $this->tablero_juego[$ry][$rx] = 9;
        $n_minas--;
      }
      $rx = rand(0,$x-1);
      $ry = rand(0,$y-1);
    }
    for( $i=0; $i<$y; $i++ )
      for( $j=0; $j<$x; $j++ )
        if( !isset($this->tablero_juego[$i][$j]) )
          $this->tablero_juego[$i][$j] = $this->minas_cercanas($i,$j);
    //  generamos el tablero a mostrar
    for( $i=0; $i<$y; $i++ )
      for( $j=0; $j<$x; $j++ )
        $this->tablero_mostrar[$i][$j] = -1;
  }
  
  // calcula las minas cercanas a una casilla
  function minas_cercanas ($x, $y)
  {
    if( isset($this->tablero[$x][$y]) ) return 0;
    $minas = 0;
    for($i=-1;$i<=1;$i++)
      for($j=-1;$j<=1;$j++)
        if( !($i == 0 AND $j == 0) AND
            !empty($this->tablero_juego[$x+$i][$y+$j]) AND
            $this->tablero_juego[$x+$i][$y+$j] == 9 )
          $minas++;
    return $minas;
  }
  
  // libera la casilla seleccionada y las cercanas en caso necesario
  function seleccionar ($x, $y)
  {
    if( $this->tablero_juego[$y][$x] == 9 )
    {
      $this->tablero_mostrar[$y][$x] = $this->tablero_juego[$y][$x]+1;
      $this->revelar_minas();
    }
    else
      $this->tablero_mostrar[$y][$x] = $this->tablero_juego[$y][$x];
    if( $this->tablero_mostrar[$y][$x] == 0 )
      for($i=-1;$i<=1;$i++)
        for($j=-1;$j<=1;$j++)
          if( !($i == 0 AND $j == 0) AND
              isset($this->tablero_juego[$y+$i][$x+$j]) AND
              $this->tablero_mostrar[$y+$i][$x+$j] == -1 )
        {
          $this->tablero_mostrar[$y+$i][$x+$j] = $this->tablero_juego[$y+$i][$x+$j];
          if( $this->tablero_juego[$y+$i][$x+$j] == 0 )
            $this->seleccionar($x+$j,$y+$i);
        }
    if( $this->tablero_mostrar[$y][$x] == 10 )
      return false;
    return true;
  }
  
  // pone visibles las casillas con minas
  function revelar_minas()
  {
    for($i=0;$i<count($this->tablero_mostrar);$i++)
      for($j=0;$j<count($this->tablero_mostrar[$i]);$j++)
        if( $this->tablero_juego[$i][$j] == 9 AND
            $this->tablero_mostrar[$i][$j] != 10 )
          $this->tablero_mostrar[$i][$j] = 9;
    $this->bloquear();
  }
  
  // coloca banderas en las casillas con minas
  function banderolas()
  {
    for($i=0;$i<count($this->tablero_mostrar);$i++)
      for($j=0;$j<count($this->tablero_mostrar[$i]);$j++)
        if( $this->tablero_juego[$i][$j] == 9 )
          $this->tablero_mostrar[$i][$j] = -3;
  }
  
  // devuelve false cuando las casillas sin abrir = minas
  function no_acabado ()
  {
    $minas_tmp = 0;
    for($i=0;$i<count($this->tablero_mostrar);$i++)
      for($j=0;$j<count($this->tablero_mostrar[$i]);$j++)
        if( ($this->tablero_mostrar[$i][$j] == -1) )//AND
            //($this->tablero_juego[$i][$j] == 9) )
          $minas_tmp++;
    if( $minas_tmp != $this->n_minas )
      return $minas_tmp;
    $this->banderolas();
    return false;
  }
  
  // bloquea el tablero para no poder seguir jugando
  function bloquear()
  {
    for($i=0;$i<count($this->tablero_mostrar);$i++)
      for($j=0;$j<count($this->tablero_mostrar[$i]);$j++)
        if( $this->tablero_mostrar[$i][$j] == -1 )
          $this->tablero_mostrar[$i][$j] = -2;
  }
  
  // devuelve un tablero con los datos a mostrar
  function tablero ()
  {
    if( isset($this->tablero_mostrar) ) return $this->tablero_mostrar;
    return false;
  }
  
  // devuelve el timpo empleado hasta el momento en segundos
  function tiempo()
  {
    return time()-$this->mtiempo;
  }
  
}

/* FIN - Seccion 3: Clase phpBuscaMinas */


/* INICIO - Seccion 4: HTML */

ob_start("ob_gzhandler");
session_start();
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

if (isset($_GET['guardar_partida'])){
   header("Content-type: application/octet-stream");
   header("Content-Disposition: attachment; filename=buscaminas.save");
   echo chunk_split(base64_encode($_SESSION['buscaminas']));
   exit;
}

if (isset($_GET['cargar_partida'])){
   echo 'cargar_partida';
   exit;
}

if( isset($_POST['tablax']) ) $_SESSION['tablax'] = $_POST['tablax'];
elseif( !isset($_SESSION['tablax']) ) $_SESSION['tablax'] = 10;
if( isset($_POST['tablay']) ) $_SESSION['tablay'] = $_POST['tablay'];
elseif( !isset($_SESSION['tablay']) ) $_SESSION['tablay'] = 10;
if( isset($_POST['minas']) ) $_SESSION['minas'] = $_POST['minas'];
elseif( !isset($_SESSION['minas']) ) $_SESSION['minas'] = 10;

if( isset($_SESSION['buscaminas']) AND !isset($_GET['nuevo']) )
  $buscaminas = unserialize($_SESSION['buscaminas']);
else
  $buscaminas = new phpBuscaMinas($_SESSION['tablax'],
                                  $_SESSION['tablay'],
                                  $_SESSION['minas']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>phpBuscaMinas</title>
<script type="text/javascript" language="JavaScript">
<!--
   function cambiar_div_mostrado(var1, var2) {
      document.getElementById(var1).style.display = "none";
      document.getElementById(var2).style.display = "block";
   }
   function openTargetBlank(e) {
      var className = 'externo';
      if (!e) var e = window.event;
         var clickedObj = e.target ? e.target : e.srcElement;
      if(clickedObj.nodeName == 'A' ) {
         r=new RegExp("(^| )"+className+"($| )");
         if(r.test(clickedObj.className)) {
            window.open(clickedObj.href);
            return false;
         }
      }
   }
   document.onclick = openTargetBlank;   
-->
</script>
<style type="text/css">
<!--
body{
  background-color: #FFFFCC;
  text-align: center;
  font-family: "Comic Sans MS", Arial, Courier;
  font-size: 12px;
}
#contenido{
  width: 100%;
  height: 100%;
}
#tablero{
  text-align: center;
  background-color: #C0C0C0;
  border-color: #FFFFFF;
  border-style: solid;
  border-left-width: 3px;
  border-top-width: 3px;
  border-bottom-width: 1px;
  border-right-width: 1px;
  color: #003366;
  font-family: "Comic Sans MS", Arial, Courier;
  font-size: 14px;
  font-weight: bold;
}
#marco{
  margin: 10px;
  border-color: #808080;
  border-style: solid;
  border-bottom-width: 1px;
  border-right-width: 1px;
  border-left-width: 0px;
  border-top-width: 0px;
}
#tabla_juego td{
  text-align: center;
  vertical-align: middle;
  background-color: #C0C0C0;
}
#tabla_juego td img{
  border-width: 0px;
  height: 20px;
  width: 20px;
}
#contenido fieldset{
  width: 300px;
}
#contenido fieldset legend{
  font-family: "Comic Sans MS", Arial, Courier;
  font-size: 15px;
  border: 1px black solid;
  padding: 1px 10px;
  background: white;
  font-weight: bold;
  cursor: hand;
}
#contenido fieldset label{
  font-family: "Comic Sans MS", Arial, Courier;
  font-size: 14px;
  border-bottom: 1px blue dashed;
  cursor: help;
  font-weight: bold;
}
#info{
  font-family: "Comic Sans MS", Arial, Courier;
  font-size: 14px;
  font-weight: bold;
}
#cfg_no{
  font-family: "Comic Sans MS", Arial, Courier;
  font-size: 15px;
  border: 1px black solid;
  padding: 1px 10px;
  background: white;
  font-weight: bold;
  width: 150px;
  cursor: hand;
}
-->
</style>
</head>
<body>
<table id="contenido" cellpadding="0" cellspacing="0">
<tr><td align="center" valign="middle" width="100%" height="100%">
<br />
<table id="tablero" cellpadding="0" cellspacing="0">
<tr><td align="center" valign="middle" width="100%" height="100%">phpBuscaMinas<br /><br />
<?php

if( isset($_GET['x'],$_GET['y']) )
  if( $buscaminas->seleccionar($_GET['x'],$_GET['y']) )
  {
    echo '<a href="'.$_SERVER['PHP_SELF'].'?nuevo">
         <img id="carita" width="25" height="25"
         style="border:0;" alt="CaraFeliz"
         src="?imagen=cara_feliz" /></a>';
    if( !$buscaminas->no_acabado() )
    {
      $tiempo_empleado = $buscaminas->tiempo();
      echo "<script type=\"text/javascript\">
           alert('Has ganado!!!\\n\\rTiempo empleado: $tiempo_empleado s')
           </script>";
    }
  }
  else
    echo '<a href="'.$_SERVER['PHP_SELF'].
         '?nuevo"><img id="carita" width="25" height="25"
         style="border:0;" alt="CaraTriste"
         src="?imagen=cara_triste" /></a>';
else
  echo '<a href="'.$_SERVER['PHP_SELF'].
       '?nuevo"><img id="carita" width="25" height="25"
       style="border:0;" alt="CaraFeliz"
       src="?imagen=cara_feliz" /></a>';
echo '<br />';

if( !$tablero_mostrar = $buscaminas->tablero() )
  echo 'Error Tablero';
else{
echo '<div id="marco">
     <table id="tabla_juego" border="0" cellspacing="0" cellpadding="0">';
for( $i=0; $i<count($tablero_mostrar); $i++ )
{
  echo '<tr>';
  for( $j=0; $j<count($tablero_mostrar[$i]); $j++ )
    if( isset($tablero_mostrar[$i][$j]) )
      if( $tablero_mostrar[$i][$j] != -1 )
        echo '<td><img alt="posicion '.($j+1).'-'.($i+1).'" 
             src="?imagen='.$tablero_mostrar[$i][$j].'" /></td>';
      else
        echo '<td><a href="'.$_SERVER['PHP_SELF'].'?x='.$j.'&amp;y='.$i.
             '"><img onclick="carita.src='."'?imagen=cara_susto'".
             '" alt="posicion '.($j+1).'-'.($i+1).
             '" src="?imagen='.$tablero_mostrar[$i][$j].'" /></a></td>';
  echo '</tr>';  
}
echo '</table></div>';}
?>
</td></tr></table>
<p id="info">
<?php
if( $buscaminas->no_acabado() )
  echo $_SESSION['minas'].' minas en '.$buscaminas->no_acabado().' casillas';
else
  echo 'juego terminado';
?>
</p>
<div id="cfg_no" style="display:block" onclick="cambiar_div_mostrado('cfg_no','cfg_si')">Mostrar Opciones</div>
<fieldset id="cfg_si" style="display:none">
<legend onclick="cambiar_div_mostrado('cfg_si','cfg_no')">Opciones del juego</legend>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'].'?nuevo'; ?>">
  <label title="Min: 10, Max: 30" for="tablax">Tama&ntilde;o Tablero X:</label>
  <select name="tablax" id="tablax">
    <?php
      for($i=10;$i<=30;$i++)
        if( $_SESSION['tablax'] == $i )
          echo '<option value="'.$i.'" selected="selected">'.$i.'</option>';
        else
          echo '<option value="'.$i.'">'.$i.'</option>';
    ?>
  </select>
  <br /><br />
  <label title="Min: 10, Max: 30" for="tablay">Tama&ntilde;o Tablero Y:</label>
  <select name="tablay" id="tablay">
    <?php
      for($i=10;$i<=30;$i++)
        if( $_SESSION['tablay'] == $i )
          echo '<option value="'.$i.'" selected="selected">'.$i.'</option>';
        else
          echo '<option value="'.$i.'">'.$i.'</option>';
    ?>
  </select>
  <br /><br />
  <label title="Min: 10, Max: 200" for="minas">Numero de Minas:</label>
  <select name="minas" id="minas">
    <?php
      for($i=10;$i<=200;$i++)
        if( $_SESSION['minas'] == $i )
          echo '<option value="'.$i.'" selected="selected">'.$i.'</option>';
        else
          echo '<option value="'.$i.'">'.$i.'</option>';
    ?>
  </select>
  <br /><br />
  <input type="submit" value="Nuevo Juego" />
  <br /><br />
  <input type="button" onclick="window.open('<?php echo $_SERVER['PHP_SELF']; ?>?guardar_partida', '_self')" value="Guardar Partida" />
  <input type="button" onclick="window.open('<?php echo $_SERVER['PHP_SELF']; ?>?cargar_partida', '_self')" value="Cargar Partida" />
</form>
</fieldset>
</td></tr></table>
<br /><br />
<a onmouseover="window.status='Validar XHTML';return true;" onmouseout="window.status=' ';return true;" href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:80px;height:15px" src="http://martinyweb.com/buttons/button-xhtml.png" alt="Validar XHTML!" /></a>
<a href="http://www.php.net"><img style="border:0;width:80px;height:15px" src="http://martinyweb.com/buttons/php-power-micro2.png" alt="PHP" /></a>
<!--Creative Commons License-->
<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Licencia de Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png" /></a>
<!--/Creative Commons License-->
<!--
<rdf:RDF xmlns="http://web.resource.org/cc/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
<Work rdf:about="">
<license rdf:resource="http://creativecommons.org/licenses/by-nc-sa/2.5/es/" />
</Work>
<License rdf:about="http://creativecommons.org/licenses/by-nc-sa/2.5/es/">
<permits rdf:resource="http://web.resource.org/cc/Reproduction"/>
<permits rdf:resource="http://web.resource.org/cc/Distribution"/>
<requires rdf:resource="http://web.resource.org/cc/Notice"/>
<requires rdf:resource="http://web.resource.org/cc/Attribution"/>
<prohibits rdf:resource="http://web.resource.org/cc/CommercialUse"/>
<permits rdf:resource="http://web.resource.org/cc/DerivativeWorks"/>
<requires rdf:resource="http://web.resource.org/cc/ShareAlike"/>
</License>
</rdf:RDF>
-->
<br /><br />
<a href="?showsource">ShowSource</a>
<br /><br />
<a href="http://www.php-hispano.net/desafios/9-buscaminas">Aplicacion presentada al concurso BuscaMinas de php-hispano.net</a>
<br /><br />
<!-- Begin Motigo Webstats counter code -->
<a id="mws3999830" href="http://webstats.motigo.com/">
<img width="80" height="15" border="0" alt="Free counter and web stats" src="http://m1.webstats.motigo.com/n80x15.gif?id=AD0IVgwu1R8rBYP2TfOhaWFdpsGQ" /></a>
<script src="http://m1.webstats.motigo.com/c.js?id=3999830&amp;lang=ES&amp;i=3" type="text/javascript"></script>
<!-- End Motigo Webstats counter code -->
</body>
</html>
<?php

$_SESSION['buscaminas'] = serialize($buscaminas);

ob_end_flush();

/* FIN - Seccion 4: HTML */

?>