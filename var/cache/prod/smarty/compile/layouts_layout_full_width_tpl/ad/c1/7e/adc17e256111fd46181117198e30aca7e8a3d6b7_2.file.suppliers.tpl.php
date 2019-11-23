<?php
/* Smarty version 3.1.33, created on 2019-10-18 04:03:37
  from '/var/www/html/tn/themes/classic/templates/catalog/suppliers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da97fe9dd90e9_25988104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adc17e256111fd46181117198e30aca7e8a3d6b7' => 
    array (
      0 => '/var/www/html/tn/themes/classic/templates/catalog/suppliers.tpl',
      1 => 1571081048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da97fe9dd90e9_25988104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9155233655da97fe9dd37c7_35395556', 'brand_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/brands.tpl');
}
/* {block 'brand_header'} */
class Block_9155233655da97fe9dd37c7_35395556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'brand_header' => 
  array (
    0 => 'Block_9155233655da97fe9dd37c7_35395556',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h1>
<?php
}
}
/* {/block 'brand_header'} */
}
