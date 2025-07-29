<?php 

#[\Until('8.5')]
function imagegammacorrect(\GdImage $image, float $input_gamma, float $output_gamma): bool
{
}
#[\Since('8.5')]
function imagegammacorrect(\GdImage $image, float $input_gamma, float $output_gamma): true
{
}