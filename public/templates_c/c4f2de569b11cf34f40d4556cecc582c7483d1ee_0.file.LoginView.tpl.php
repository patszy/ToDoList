<?php
/* Smarty version 4.1.0, created on 2022-05-01 14:03:16
  from '/Applications/XAMPP/xamppfiles/htdocs/php_09_bd/app/views/LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_626e7704d517d8_68900020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4f2de569b11cf34f40d4556cecc582c7483d1ee' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/php_09_bd/app/views/LoginView.tpl',
      1 => 1651405653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_626e7704d517d8_68900020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_506911448626e7704d48375_34199553', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_506911448626e7704d48375_34199553 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_506911448626e7704d48375_34199553',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="pure-control-group">
			<label>Login:
				<input type="text" name="login"/>
			</label>
		</div>
        <div class="pure-control-group">
			<label>Password:
				<input type="password" name="pass" /><br />
			</label>
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'top'} */
}
