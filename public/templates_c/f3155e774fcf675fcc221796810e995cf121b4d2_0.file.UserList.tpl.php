<?php
/* Smarty version 4.1.0, created on 2022-05-28 14:04:31
  from '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/UserList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62920fcfacbdc4_52123272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3155e774fcf675fcc221796810e995cf121b4d2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/UserList.tpl',
      1 => 1653739468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:UserTable.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_62920fcfacbdc4_52123272 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159817220562920fcfab0442_11325371', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_159817220562920fcfab0442_11325371 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_159817220562920fcfab0442_11325371',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <section class="todo-list-container">
            <header class="todo-list-header">
                <h1 class="todo-list-title">
                    user list
                </h1>
				
				<div class="task-list-bar">	
                	<form id="search-form" class="todo-list-search-form" onkeyup="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userTable','table'); return false;">
                    	<input type="search" placeholder="User Login" name="sf_login" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->search;?>
" class="todo-list-search">
						<button type="submit" class="button button--search" title="Search user">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
                	</form>
				</div>
            </header>

            <div class="todo-list" id="table">
				<?php $_smarty_tpl->_subTemplateRender("file:UserTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
