<?php
/* Smarty version 4.1.0, created on 2022-05-04 13:52:35
  from '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/TodoEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627269038e0ae5_41454617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d0f10fa2ad6e2a93ad36141ea5133286df2bc98' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/TodoEdit.tpl',
      1 => 1651665153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_627269038e0ae5_41454617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1065859864627269038d21f1_50407171', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_1065859864627269038d21f1_50407171 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1065859864627269038d21f1_50407171',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
todoSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane kredytu</legend>
		<div class="pure-control-group">
            <label for="title">Tytuł</label>
            <input id="title" type="text" placeholder="Tytuł" name="title" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->title;?>
">
        </div>
		<div class="pure-control-group">
            <label for="message">Wiadomość</label>
            <input id="message" type="text" placeholder="Wiadomość" name="message" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->message;?>
">
        </div>
		<div class="pure-control-group">
            <label for="deadline">Deadline</label>
            <input id="deadline" type="date" placeholder="Deadline" name="deadline" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->deadline;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
todoList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
</form>	
</div>
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'top'} */
}
