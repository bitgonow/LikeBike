<?php
/* Smarty version 3.1.33, created on 2019-10-14 14:50:34
  from '/var/www/html/tn/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da4d18a252708_92534895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d729eae402cfe598b77fd0b40a9d7c046b4e97c' => 
    array (
      0 => '/var/www/html/tn/themes/classic/templates/index.tpl',
      1 => 1571081048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da4d18a252708_92534895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21175135105da4d18a250ec4_29162282', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_11130812585da4d18a2513c6_72864719 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_10442965855da4d18a251c20_01696710 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_3971759695da4d18a2518e1_12567920 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10442965855da4d18a251c20_01696710', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_21175135105da4d18a250ec4_29162282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_21175135105da4d18a250ec4_29162282',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11130812585da4d18a2513c6_72864719',
  ),
  'page_content' => 
  array (
    0 => 'Block_3971759695da4d18a2518e1_12567920',
  ),
  'hook_home' => 
  array (
    0 => 'Block_10442965855da4d18a251c20_01696710',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11130812585da4d18a2513c6_72864719', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3971759695da4d18a2518e1_12567920', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
