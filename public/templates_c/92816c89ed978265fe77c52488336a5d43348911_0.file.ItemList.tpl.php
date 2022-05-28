<?php
/* Smarty version 4.1.0, created on 2022-05-28 12:20:42
  from '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/ItemList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6291f77aa148c2_85994115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92816c89ed978265fe77c52488336a5d43348911' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/ItemList.tpl',
      1 => 1653733043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ItemTable.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6291f77aa148c2_85994115 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4448634976291f77aa0caf3_67228316', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_4448634976291f77aa0caf3_67228316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_4448634976291f77aa0caf3_67228316',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <section class="todo-list-container">
            <header class="todo-list-header">
                <h1 class="todo-list-title">
                    Tasks
                </h1>
				
				<a class="button button--add" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
itemNew/<?php echo $_smarty_tpl->tpl_vars['id_list']->value;?>
">Add Task</a>
				
				<div class="task-list-bar">
                	<form id="search-form" class="todo-list-search-form" onkeyup="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
itemTable/<?php echo $_smarty_tpl->tpl_vars['id_list']->value;?>
','table'); return false;">
                    	<input type="search" placeholder="Task Title" name="sf_title" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->search;?>
" class="todo-list-search">
						<button type="submit" class="button button--search" title="Search item">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
                	</form>
				</div>
            </header>

            <div class="todo-list" id="table">
				<?php $_smarty_tpl->_subTemplateRender("file:ItemTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </section>

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'top'} */
}
