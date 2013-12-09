{*
a11d55b2c22f3ed2548072e03cca2ab6454c2e76, v3 (xcart_4_6_0), 2013-04-08 13:50:24, menu_bestsellers.tpl, aim
vim: set ts=2 sw=2 sts=2 et:
*}

{* skip if allowed
if $config.Bestsellers.bestsellers_menu eq "Y"
*}

  {capture name=menu}
    <table id="new-arrivals-table">

      {foreach from=$config.New_Arrivals_r3.Products item=n name=new_arrivals}
        <tr>
          <td><a href="product.php?productid={$n[0]}">{include file="product_thumbnail.tpl" productid=$n[0] product=$n[2] tmbn_url=$n[4]}</a></td>
          <td><a href="product.php?productid={$n[0]}" class="title">{$n[2]}</a><br>{$n[3]}</td>
        </tr>
      {/foreach}

    </table>
  {/capture}
  {include file="customer/menu_dialog.tpl" title="New Products" content=$smarty.capture.menu additional_class="menu-new-arrivals"}


{*/if*}
