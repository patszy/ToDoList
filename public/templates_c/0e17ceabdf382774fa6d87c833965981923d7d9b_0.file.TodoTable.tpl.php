<?php
/* Smarty version 4.1.0, created on 2022-05-28 13:42:35
  from '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/TodoTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62920aab2938f2_80789111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e17ceabdf382774fa6d87c833965981923d7d9b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/TodoTable.tpl',
      1 => 1653738153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62920aab2938f2_80789111 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lists']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
	<div class="todo-item"><div class="todo-item-bar"><?php if (!empty($_smarty_tpl->tpl_vars['conf']->value->roles['role'])) {?><a class="todo-item-show" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
itemList/<?php echo $_smarty_tpl->tpl_vars['l']->value['id_list'];?>
" title="Show"><i class="fa-solid fa-eye"></i></a><?php }?><h3 class="todo-item-date"><?php echo $_smarty_tpl->tpl_vars['l']->value["date"];?>
</h3><?php if (!empty($_smarty_tpl->tpl_vars['conf']->value->roles['role'])) {?><a class="todo-item-delete" onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
todoDelete/<?php echo $_smarty_tpl->tpl_vars['l']->value['id_list'];?>
','Delete the list with it\'s data?')" title="Delete"><i class="fas fa-times-circle"></i></a><?php }?></div><div class="todo-item-header"><h3 class="todo-item-title"><?php echo $_smarty_tpl->tpl_vars['l']->value["title"];?>
</h3><?php if (!empty($_smarty_tpl->tpl_vars['conf']->value->roles['role'])) {?><a class="todo-item-edit" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
todoEdit/<?php echo $_smarty_tpl->tpl_vars['l']->value['id_list'];?>
"  title="Edit"><i class="fa-solid fa-pen-to-square"></i></a><?php }?></div></div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
