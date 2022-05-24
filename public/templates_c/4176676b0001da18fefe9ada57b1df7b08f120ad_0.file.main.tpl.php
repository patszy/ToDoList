<?php
/* Smarty version 4.1.0, created on 2022-05-24 18:01:12
  from '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/templates/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628d014853c1a0_51731092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4176676b0001da18fefe9ada57b1df7b08f120ad' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/templates/main.tpl',
      1 => 1653408070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628d014853c1a0_51731092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Todo List</title>
	<meta name="author" description="Patryk Szymczyk">
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
		integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
</head>

<body style="margin: 20px;">

	<main class="todo-container">
		<div class="todo-menu-bar">
			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
todoList" class="button button--menu">Lista</a>
			<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="button button--menu">Wyloguj</a>
			<?php } else { ?>	
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="button button--menu">Zaloguj</a>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['conf']->value->roles['user']) && $_smarty_tpl->tpl_vars['conf']->value->roles['user'] == 'admin') {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userList" class="button button--menu">Admin Panel</a>
			<?php }?>
		</div>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_844163297628d014853a829_52498408', 'top');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_341521584628d014853b272_44935480', 'messages');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1041280947628d014853b9e1_06117618', 'bottom');
?>


    </main>
</body>

</html><?php }
/* {block 'top'} */
class Block_844163297628d014853a829_52498408 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_844163297628d014853a829_52498408',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_341521584628d014853b272_44935480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_341521584628d014853b272_44935480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'messages'} */
/* {block 'bottom'} */
class Block_1041280947628d014853b9e1_06117618 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_1041280947628d014853b9e1_06117618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
