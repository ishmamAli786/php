<?php
// filter-var() this function is used to validate and  sanitize data
// this function filters a singal variable with a specified filter.
//syntex filter-var(variable,filter,option)
//variable value to filter and
// filter the id of the filter to apply
// options it specifies one or more flags/option to use
// EX:- filter_var('contact@ishmamalikhan.com',FILTER_VALIDATE_EMAIL)
// EX:- filter_var('contact@ishmamalikhan.com',FILTER_SANITIZE_EMAIL)


// filters for validation
//FILTER_VALIDATE_BOLEAN IT VALIDATES BOLEAN
//FILTER_VALIDATE_DOMAIN IT VALIDATES WHETER THE DOMAIN NAME LABEL LENGTHS ARE VALID
//FILTER_VALIDATE_EMAIL IT VALIDATES WHETHER THE VALUE IS A VALID EMAIL ADDRESS
//FILTER_VALIDATE_FLOAT IT VALIDATES VALUES AS FLOAT AND CONVERT TO FLOAT ON SUCCESS
//FILTER_VALIDATE_INT IT VALIDATES VALUES AS INT AND CONVERT TO INTO ON SUCCESS
//FILTER_VALIDATE_IP IT VALIDATES VALUES AS IP ADDRESS
//FILTER_VALIDATE_MAC IT VALIDATES VALUES AS MAC ADDRESS
//FILTER_VALIDATE_REGEXP IT VALIDATES AGAINST REGEXP A PERL-COMPATIBLE REGULAR EXPRESSION
//FILTER_VALIDATE_URL IT VALIDATES A URL
?>