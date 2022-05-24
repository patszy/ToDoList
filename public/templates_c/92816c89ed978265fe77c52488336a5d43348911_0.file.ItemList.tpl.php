<?php
/* Smarty version 4.1.0, created on 2022-05-20 11:17:29
  from '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/ItemList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62875ca9c21e38_80109751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92816c89ed978265fe77c52488336a5d43348911' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/ItemList.tpl',
      1 => 1653037962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_62875ca9c21e38_80109751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213820135262875ca9c134f6_67841451', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_213820135262875ca9c134f6_67841451 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_213820135262875ca9c134f6_67841451',
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
                	<form class="todo-list-search-form" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
itemList/<?php echo $_smarty_tpl->tpl_vars['id_list']->value;?>
">
                    	<input type="search" placeholder="Task Title" name="sf_title" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->search;?>
" class="todo-list-search">
						<button type="submit" class="button button--search"   title="Search item">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
                	</form>
				</div>
            </header>

            <div class="todo-list" id="tab_people">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
				<div class="todo-item"><div class="todo-item-bar"><h3 class="todo-item-date"><?php echo $_smarty_tpl->tpl_vars['i']->value["deadline"];?>
</h3><a class="todo-item-delete" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
itemDelete/<?php echo $_smarty_tpl->tpl_vars['id_list']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['id_item'];?>
" title="Delete item"><i class="fas fa-times-circle"></i></a></div><div class="todo-item-header"><h3 class="todo-item-title"><?php echo $_smarty_tpl->tpl_vars['i']->value["title"];?>
</h3><a class="todo-item-edit" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
itemEdit/<?php echo $_smarty_tpl->tpl_vars['id_list']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['id_item'];?>
"  title="Edit item"><i class="fa-solid fa-pen-to-square"></i></a></div><p class="todo-item-text"><?php echo $_smarty_tpl->tpl_vars['i']->value["message"];?>
</br></p></div>
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
