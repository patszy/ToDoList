<?php
/* Smarty version 4.1.0, created on 2022-05-04 12:57:04
  from '/Applications/XAMPP/xamppfiles/htdocs/todo_list/app/views/TodoList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62725c000d1038_48474765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc20ba524e65d726b0aafa78f8404b301e154960' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/todo_list/app/views/TodoList.tpl',
      1 => 1651661576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_62725c000d1038_48474765 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123203076362725c000b3f42_09925119', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79481199362725c000bdb47_75246884', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_123203076362725c000b3f42_09925119 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_123203076362725c000b3f42_09925119',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
todoList">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="Wartość" name="sf_value" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->value;?>
" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_79481199362725c000bdb47_75246884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_79481199362725c000bdb47_75246884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
todoNew">+ Nowa osoba</a>
</div>	

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>Wartość</th>
		<th>Lata</th>
		<th>Procent</th>
		<th>Koszt</th>
		<th>Edycja</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['credits']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['c']->value["value"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["year"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["percent"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["cost"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
todoEdit/<?php echo $_smarty_tpl->tpl_vars['c']->value['idcredit'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
todoDelete/<?php echo $_smarty_tpl->tpl_vars['c']->value['idcredit'];?>
">Usuń</a></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'bottom'} */
}
