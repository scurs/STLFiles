<?php

/**
 * @author Luca Rainone
 * @copyright 2018
 */

set_include_path(get_include_path().PATH_SEPARATOR.$_SERVER['DOCUMENT_ROOT']."/php-stl-master/src/Model");
set_include_path(get_include_path().PATH_SEPARATOR.$_SERVER['DOCUMENT_ROOT']."/php-stl-master/src/Handler");
set_include_path(get_include_path().PATH_SEPARATOR.$_SERVER['DOCUMENT_ROOT']."/php-stl-master/src/Reader");

include "HandlerInterface.php";
include "STLModelHandler.php";
include "STLModel.php";
include "Vertex.php";
include "Facet.php";
include "Normal.php";
include "VolumeHandler.php";
include "BaseSTLReader.php";
include "BinnarySTLReader.php";
include "TextSTLReader.php";
include "STLReader.php";

include("lib/Smarty/libs/Smarty.class.php");

use PHPSTL\Reader\STLReader;
use PHPSTL\Reader\BinnarySTLReader;
use PHPSTL\Reader\BaseSTLReader;
use PHPSTL\Handler\STLModelHandler;
use PHPSTL\Model\Facet;
use PHPSTL\Handler;
use PHPSTL\Handler\VolumeHandler;

// Ortogonal dimensions (obsolete: the library already do min and max calculations)
//
function calcDim_obsolete($model) {

  $xmin = 0;
  $xmax = 0;
  $ymin = 0;
  $ymax = 0;
  $zmin = 0;
  $zmax = 0;
  $firstvertex = true;
  
  $facets = $model->getFacets();
    
  foreach ($facets as $triangle) {
  
    $verts = array($triangle->v1(), $triangle->v2(), $triangle->v3());
  
    foreach ($verts as $v) {
    
      if ($firstvertex) {
    
        $xmin = $v->x();
        $xmax = $v->x();
        $ymin = $v->y();
        $ymax = $v->y();
        $zmin = $v->z();
        $zmax = $v->z();
        $firstvertex = false;
        
      } else {
      
        $vx = $v->x();
        $vy = $v->y();
        $vz = $v->z();
        
        if ($vx < $xmin)
          $xmin = $vx;

        if ($vx > $xmax)
          $xmax = $vx;

        if ($vy < $ymin)
          $ymin = $vy;

        if ($vy > $ymax)
          $ymax = $vy;

        if ($vz < $zmin)
          $zmin = $vz;

        if ($vz > $zmax)
          $zmax = $vz;
      }
    }
  }
    
  return array("DimX" => $xmax - $xmin,
               "DimY" => $ymax - $ymin,
               "DimZ" => $zmax - $zmin);
}

// Ortogonal dimensions
//
function calcDim($model) {

  $xmin = $model->minx();
  $xmax = $model->maxx();
  $ymin = $model->miny();
  $ymax = $model->maxy();
  $zmin = $model->minz();
  $zmax = $model->maxz();

  if ($xmin === null)
    $xmin = 0;

  if ($xmax === null)
    $xmax = 0;

  if ($ymin === null)
    $ymin = 0;

  if ($ymax === null)
    $xmin = 0;

  if ($zmin === null)
    $zmin = 0;

  if ($zmax === null)
    $zmax = 0;
    
  return array("DimX" => $xmax - $xmin,
               "DimY" => $ymax - $ymin,
               "DimZ" => $zmax - $zmin);
}

// Volume
//
function calcVolume($model) {

  return $model->volume();

}

ini_set('memory_limit', '-1');

$globalErr = "";
$dimErr = "";
$volErr = "";

if (isset($_GET["filepath"])) {

  try {
    $filepath = $_SERVER['DOCUMENT_ROOT'].
                str_replace(array("%2E", "%2F"), array(".", "/"), $_GET["filepath"]);
    $reader = STLReader::forFile($filepath);
    $model = $reader->readModel();

    $DIM = calcDim($model);
    $volume = calcVolume($model);

  } catch (Exception $e) {

    $globalErr = "Error calculating required data. ".$e->getMessage()."<br/>\n";
    
  }

} else  {

  $globalErr = "No file for calculations<br/>\n";
    
}

$smarty = new Smarty();

$smarty->assign("generalFailureErr", $globalErr);  
if ($globalErr == "") {
  $smarty->assign("errMsg1", $dimErr);
  $smarty->assign("xSize", number_format($DIM["DimX"], 4, ".", ""));
  $smarty->assign("ySize", number_format($DIM["DimY"], 4, ".", ""));
  $smarty->assign("zSize", number_format($DIM["DimZ"], 4, ".", ""));
  $smarty->assign("errMsg2", $volErr);
  $smarty->assign("vol", number_format($volume, 4, ".", ""));
} else {
  $smarty->assign("errMsg1", "");
  $smarty->assign("xSize", "");
  $smarty->assign("ySize", "");
  $smarty->assign("zSize", "");
  $smarty->assign("errMsg2", "");
  $smarty->assign("vol", "");
}

$smarty->display("tpl/stlCalc.tpl");

?>
