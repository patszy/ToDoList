<?php
/* Smarty version 4.1.0, created on 2022-05-28 12:26:16
  from '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/ItemTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6291f8c8b40dc2_71548714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32127255212ac436cb7381c0c2418eba88d579b7' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/ItemTable.tpl',
      1 => 1653733571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6291f8c8b40dc2_71548714 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
	<div class="todo-item"><div class="todo-item-bar"><h3 class="todo-item-date"><?php echo $_smarty_tpl->tpl_vars['i']->value["deadline"];?>
</h3><a class="todo-item-delete" onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
itemDelete/<?php echo $_smarty_tpl->tpl_vars['id_list']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['id_item'];?>
','Delete the item?')" title="Delete item"><i class="fas fa-times-circle"></i></a></div><div class="todo-item-header"><h3 class="todo-item-title"><?php echo $_smarty_tpl->tpl_vars['i']->value["title"];?>
</h3><a class="todo-item-edit" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
itemEdit/<?php echo $_smarty_tpl->tpl_vars['id_list']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['id_item'];?>
"  title="Edit item"><i class="fa-solid fa-pen-to-square"></i></a></div><p class="todo-item-text"><?php echo $_smarty_tpl->tpl_vars['i']->value["message"];?>
</br></p></div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
