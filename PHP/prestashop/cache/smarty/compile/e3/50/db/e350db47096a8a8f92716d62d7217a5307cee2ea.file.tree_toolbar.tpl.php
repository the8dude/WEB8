<?php /* Smarty version Smarty-3.1.19, created on 2016-04-13 15:47:48
         compiled from "C:\Users\stagiaire\Desktop\Formation DL\Web\PHP\prestashop\admin168igz8ca\themes\default\template\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26570570e4e046e6d72-51992426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e350db47096a8a8f92716d62d7217a5307cee2ea' => 
    array (
      0 => 'C:\\Users\\stagiaire\\Desktop\\Formation DL\\Web\\PHP\\prestashop\\admin168igz8ca\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26570570e4e046e6d72-51992426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_570e4e0472cd41_35995842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e4e0472cd41_35995842')) {function content_570e4e0472cd41_35995842($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
