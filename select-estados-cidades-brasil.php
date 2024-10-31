<?php
/**
Plugin Name: Select Estados e Cidades Brasil
Plugin URI: http://www.mestresdowp.com.br/
Description: O Plugin Select Estados Cidades Brasil preenche automaticamente <option> com estados e cidades Brasileiros.
Version: 1.6
Author: Mestres do WP
Author URI: http://www.mestresdowp.com.br
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Text Domain: select-estados-e-cidades-brasil
 */
 /*
Copyright 2021  Mestres do WP  (email : contato@mestresdowp.com.br)
*/
include "admin/mwp-secbr-admin.php";
if(get_option('secbr_active')){
include "includes/mwp-secbr-scripts.php";
}