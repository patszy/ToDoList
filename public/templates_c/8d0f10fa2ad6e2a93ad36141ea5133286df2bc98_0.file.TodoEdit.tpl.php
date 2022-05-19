<?php
/* Smarty version 4.1.0, created on 2022-05-19 16:22:11
  from '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/TodoEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628652935ebd41_24817301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d0f10fa2ad6e2a93ad36141ea5133286df2bc98' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/TodoEdit.tpl',
      1 => 1652970122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_628652935ebd41_24817301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19248908628652935e2312_92659570', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_19248908628652935e2312_92659570 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_19248908628652935e2312_92659570',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form class="todo-form" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
todoSave" method="post">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
" title="Title">
    <label class="todo-form-label">Title
        <input class="todo-form-message" type="text" placeholder="Title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->title;?>
" title="Title">
    </label>
    <label class="todo-form-label" >Deadline
        <input class="todo-form-message" type="date" placeholder="Deadline" name="deadline" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->date;?>
" title="Deadline date">
    </label>

    <div>
        <button type="submit" class="button todo-form-button" title="Save task">Save</button>
	    <a class="button todo-form-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
todoList" title="Back to list">Back</a>
    </div>    
</form>

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'top'} */
}
