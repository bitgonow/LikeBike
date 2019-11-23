<?php
/* Smarty version 3.1.33, created on 2019-10-14 14:55:17
  from '/var/www/html/tn/admin668qv57qo/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da4d2a513dbd1_96405012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5d612e9d3aa76ad9d40c078132b3d9a4ace5754' => 
    array (
      0 => '/var/www/html/tn/admin668qv57qo/themes/default/template/content.tpl',
      1 => 1571081047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da4d2a513dbd1_96405012 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
