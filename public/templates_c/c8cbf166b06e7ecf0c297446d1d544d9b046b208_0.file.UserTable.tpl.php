<?php
/* Smarty version 4.1.0, created on 2022-05-28 13:58:36
  from '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/UserTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62920e6c55add0_00060162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8cbf166b06e7ecf0c297446d1d544d9b046b208' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/UserTable.tpl',
      1 => 1653739099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62920e6c55add0_00060162 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
	<div class="todo-item"><div class="todo-item-bar"><h3 class="todo-item-title">Login: <?php echo $_smarty_tpl->tpl_vars['u']->value["login"];?>
</h3><a class="todo-item-delete" onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userDelete/<?php echo $_smarty_tpl->tpl_vars['u']->value['id_user'];?>
','Delete the user with it\'s data?')" title="Delete user"><i class="fas fa-times-circle"></i></a></div></div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
