<?php
/* Smarty version 3.1.33, created on 2019-10-14 17:12:17
  from '/var/www/html/tn/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da4f2c1b19ba4_64052001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5358d9584eb92820ab9a430aa52775e032feea5' => 
    array (
      0 => '/var/www/html/tn/themes/classic/templates/page.tpl',
      1 => 1571081048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da4f2c1b19ba4_64052001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2195269475da4f2c1b17113_25908308', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_6469747565da4f2c1b17978_10341592 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_16599814275da4f2c1b17565_83961234 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6469747565da4f2c1b17978_10341592', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_12692997915da4f2c1b187a0_29430912 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_20775665235da4f2c1b18b66_80865206 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16305909915da4f2c1b184e7_04464638 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12692997915da4f2c1b187a0_29430912', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20775665235da4f2c1b18b66_80865206', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_16988979465da4f2c1b19368_91522518 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_17046427275da4f2c1b190e1_89756286 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16988979465da4f2c1b19368_91522518', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2195269475da4f2c1b17113_25908308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2195269475da4f2c1b17113_25908308',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_16599814275da4f2c1b17565_83961234',
  ),
  'page_title' => 
  array (
    0 => 'Block_6469747565da4f2c1b17978_10341592',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16305909915da4f2c1b184e7_04464638',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_12692997915da4f2c1b187a0_29430912',
  ),
  'page_content' => 
  array (
    0 => 'Block_20775665235da4f2c1b18b66_80865206',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_17046427275da4f2c1b190e1_89756286',
  ),
  'page_footer' => 
  array (
    0 => 'Block_16988979465da4f2c1b19368_91522518',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16599814275da4f2c1b17565_83961234', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16305909915da4f2c1b184e7_04464638', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17046427275da4f2c1b190e1_89756286', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
