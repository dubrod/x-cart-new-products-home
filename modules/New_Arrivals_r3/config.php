<?php
/* vim: set ts=4 sw=4 sts=4 et: */
/**
 * New Arrivals
 *
 * @category   X-Cart
 * @package    X-Cart
 * @subpackage Modules
 * @author     Wayne Roddy <wayne@revitalagency.com>
 * @copyright  
 * @license    http://www.x-cart.com/license.php X-Cart license agreement
 * @version    v6 (xcart_4_6_0)
 * @link       http://www.revitalagency.com/
 * @see        ____file_see____
 */

if ( !defined('XCART_START') ) { header('Location: home.php'); die('Access denied'); }

$css_files['New_Arrivals_r3'][] = array('main' => true);

$_module_dir  = $xcart_dir . XC_DS . 'modules' . XC_DS . 'New_Arrivals_r3';

/*
 Load module functions
*/
if (!empty($include_func))
require_once $_module_dir . XC_DS . 'func.php';

/*
Module initialization
I turned this on, then the site went to all white. "New_Arrivals_r3" did show up in the {$active_modules} array after. Not sure if coincedence yet
*/
//if (!empty($include_init)) { func_new_arrivals_r3_init(); }

?>