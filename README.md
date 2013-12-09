x-cart-new-products-home
========================

Display a simple Table or List of the 5 Latest Products added to your X-Cart. Manual installation. Some developer knowledge required. This is not a professional polished plugin at this point. 

## Installation

copy the files to your server (**test server unless you know what your doing**)

## Database Module Initialization

In phpMyAdmin or which ever software you prefer open xcart_modules

*INSERT* new Row. module_name = New_Arrivals_r3 , active = Y

You should be able to see it in the modules section of the admin.

## Template Addition

*{tpl_dir}/customer/main/welcome.tpl*

    <div class="new-arrivals-cell">{include file="modules/New_Arrivals_r3/new_arrivals_r3.tpl"}</div>

## Debugging

At this point you should be able to see the results. If nothing is showing check that at least. The above container cell div is output. 

I had issues with Module Initialization Cache I believe. So I noted on the config file the function you can uncomment, run, and then comment back out.

*Opening the X-cart Debug Console will allow you to view the variables.*

Any issues, just email me. 