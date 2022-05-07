<?php
/* Smarty version 4.1.0, created on 2022-05-07 16:13:08
  from '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/TodoList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62767e740c68b6_14203057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db5600b6bfed3171e18429a0c5034b4f29af6846' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/TodoList.tpl',
      1 => 1651932775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_62767e740c68b6_14203057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201325293162767e7409d402_80541371', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_201325293162767e7409d402_80541371 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_201325293162767e7409d402_80541371',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <section class="todo-list-container">
            <header class="todo-list-header">
                <h1 class="todo-list-title">
                    Task list
                </h1>
				
				<a class="button button--add" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
todoNew">Add Task</a>
				
				<div class="task-list-bar">	
                	<form class="todo-list-search-form" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
todoList">
                    	<input type="search" placeholder="Task Title" name="sf_title" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->title;?>
" class="todo-list-search">
						<button type="submit" class="button button--search"   title="Search item">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
                	</form>
				</div>
            </header>

            <div class="todo-list" id="tab_people">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lists']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
				<div class="todo-item"><div class="todo-item-bar"><h3 class="todo-item-date"><?php echo $_smarty_tpl->tpl_vars['l']->value["deadline"];?>
</h3><a class="todo-item-delete" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
todoDelete/<?php echo $_smarty_tpl->tpl_vars['l']->value['id_item'];?>
" title="Delete item"><i class="fas fa-times-circle"></i></a></div><div class="todo-item-header"><h3 class="todo-item-title"><?php echo $_smarty_tpl->tpl_vars['l']->value["title"];?>
</h3><a class="todo-item-edit" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
todoEdit/<?php echo $_smarty_tpl->tpl_vars['l']->value['id_item'];?>
"  title="Edit item"><i class="fa-solid fa-pen-to-square"></i></a></div><p class="todo-item-text"><?php echo $_smarty_tpl->tpl_vars['l']->value["message"];?>
</br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio laudantium quasi blanditiis enim molestias explicabo id totam veniam corporis maiores.</p></div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </section>

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'top'} */
}
