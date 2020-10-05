<?php 

#if U_ICU_VERSION_MAJOR_NUM >= 56
function normalizer_get_raw_decomposition(string $input, int $form = Normalizer::FORM_C) : ?string
{
}