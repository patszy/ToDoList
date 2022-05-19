<?php
/* Smarty version 4.1.0, created on 2022-05-19 16:12:51
  from '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/UserList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62865063d57d05_51044396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3155e774fcf675fcc221796810e995cf121b4d2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/UserList.tpl',
      1 => 1652969560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_62865063d57d05_51044396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194954079262865063d47770_78848889', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_194954079262865063d47770_78848889 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_194954079262865063d47770_78848889',
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
                	<form class="todo-list-search-form" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userList">
                    	<input type="search" placeholder="User Login" name="sf_login" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->search;?>
" class="todo-list-search">
						<button type="submit" class="button button--search"   title="Search user">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
                	</form>
				</div>
            </header>

            <div class="todo-list" id="tab_people">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
				<div class="todo-item"><div class="todo-item-bar"><h3 class="todo-item-title">Login: <?php echo $_smarty_tpl->tpl_vars['u']->value["login"];?>
</h3><a class="todo-item-delete" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userDelete/<?php echo $_smarty_tpl->tpl_vars['u']->value['id_user'];?>
" title="Delete user"><i class="fas fa-times-circle"></i></a></div></div>
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
