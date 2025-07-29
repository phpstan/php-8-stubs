<?php 

#[\Until('8.5')]
function imagesettile(\GdImage $image, \GdImage $tile): bool
{
}
#[\Since('8.5')]
function imagesettile(\GdImage $image, \GdImage $tile): true
{
}