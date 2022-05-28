<?php
/* Smarty version 4.1.0, created on 2022-05-24 19:21:21
  from '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628d1411253755_93109975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0209f2cbcb6103fce5b7cae855201fdfba28c0f8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/RegisterView.tpl',
      1 => 1653412879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_628d1411253755_93109975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1099808520628d141124d9f4_53288421', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_1099808520628d141124d9f4_53288421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1099808520628d141124d9f4_53288421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post" class="todo-form">
	<label class="todo-form-label">
		<input class="todo-form-message" type="text" name="login" title="Login" placeholder="Login"/>
	</label>
	<label class="todo-form-label">
		<input class="todo-form-message" type="password" name="password" title="Password" placeholder="Password"/>
	</label>
	<label class="todo-form-label">
		<input class="todo-form-message" type="password" name="password2" title="Repeat password" placeholder="Repeat password"/>
	</label>
	
	<div class="todo-menu-bar">
		<button type="submit" class="button todo-form-button" title="Register">Register</button>
		<a class="button todo-form-button" title="Login" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">Login</a>
	</div> 
</form>

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'top'} */
}
