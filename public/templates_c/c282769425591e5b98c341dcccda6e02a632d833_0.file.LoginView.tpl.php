<?php
/* Smarty version 4.1.0, created on 2022-05-24 19:20:29
  from '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628d13dde49dc9_56240934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c282769425591e5b98c341dcccda6e02a632d833' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/LoginView.tpl',
      1 => 1653412828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_628d13dde49dc9_56240934 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1509983225628d13dde410c8_86515688', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_1509983225628d13dde410c8_86515688 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1509983225628d13dde410c8_86515688',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="todo-form">
	<label class="todo-form-label">
		<input class="todo-form-message" type="text" name="login" title="Login" placeholder="Login"/>
	</label>
	<label class="todo-form-label">
		<input class="todo-form-message" type="password" name="password" title="Password" placeholder="Password"/>
	</label>
	
	<div class="todo-menu-bar">
		<button type="submit" value="Login" class="button todo-form-button" title="Login">Login</button>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerShow" class="button todo-form-button" title="Register">Register</a>
	</div> 
</form>

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'top'} */
}
