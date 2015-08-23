<?php
c("image6")->show();
if(c("saveDlg1")->execute()){
$file = c("saveDlg1")->fileName.".png";
$picture = new TControlCanvas(c('ScrollBox1'));
$picture->savePicture("$file");
}
c("image6")->hide();
