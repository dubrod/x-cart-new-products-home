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

if (!defined('XCART_SESSION_START')) { header("Location: home.php"); die("Access denied"); }

global $config;
    
    //query new products that are for sale
    $new_prods = func_query("SELECT productid, productcode FROM xcart_products WHERE forsale = 'Y' ORDER BY productid DESC LIMIT 5");
	
	//set the new array holder
	$new_prod_array = "";
	
	foreach($new_prods as $prod){
		//get other details
		$details = func_query("SELECT product, descr FROM xcart_products_lng_en WHERE productid = ".$prod['productid']." LIMIT 1");
		//get thumbnail
		$img = func_query("SELECT image_path FROM xcart_images_T WHERE id = ".$prod['productid']." LIMIT 1");
		
		//set all details
		$sku = $prod['productcode'];
		
		$new_prod_array[$sku][] = $prod['productid']; 		// id
		$new_prod_array[$sku][] = $sku;						// sku
		$new_prod_array[$sku][] = $details[0]['product'];	// name
		$new_prod_array[$sku][] = $details[0]['descr'];		// descr
		$new_prod_array[$sku][] = $img[0]['image_path'];	// thumbnail
	}
	
	$config['New_Arrivals_r3']['Products'] = $new_prod_array;

?>
