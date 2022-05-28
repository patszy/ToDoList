<?php
/* Smarty version 4.1.0, created on 2022-05-28 13:23:38
  from '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/TodoList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6292063aa7b9a2_46768502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db5600b6bfed3171e18429a0c5034b4f29af6846' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/TodoList.tpl',
      1 => 1653736737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:TodoTable.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6292063aa7b9a2_46768502 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15397996926292063aa69e94_50524510', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_15397996926292063aa69e94_50524510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_15397996926292063aa69e94_50524510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <section class="todo-list-container">
            <header class="todo-list-header">
				<h1 class="todo-list-title">
                    Lists
                </h1>

				<?php if (!empty($_smarty_tpl->tpl_vars['conf']->value->roles['role'])) {?>
					<a class="button button--add" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
todoNew">Add List</a>
				<?php }?>
				
				
				<div class="task-list-bar">	
                	<form id="search-form" class="todo-list-search-form" onkeyup="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
todoTable','table'); return false;">
                    	<input type="search" placeholder="List Title" name="sf_title" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->search;?>
" class="todo-list-search">
						<button type="submit" class="button button--search"   title="Search">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
                	</form>
				</div>
            </header>

			<div class="todo-list" id="table">
				<?php $_smarty_tpl->_subTemplateRender("file:TodoTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
