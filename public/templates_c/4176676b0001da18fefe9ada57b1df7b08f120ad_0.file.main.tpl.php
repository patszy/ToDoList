<?php
/* Smarty version 4.1.0, created on 2022-05-28 11:41:21
  from '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/templates/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6291ee41a419c4_53466881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4176676b0001da18fefe9ada57b1df7b08f120ad' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ToDoList/app/views/templates/main.tpl',
      1 => 1653730216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6291ee41a419c4_53466881 (Smarty_Internal_Template $_smarty_tpl) {
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
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>
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
			<?php if (!empty($_smarty_tpl->tpl_vars['conf']->value->roles['role']) && $_smarty_tpl->tpl_vars['conf']->value->roles['role'] == 'admin') {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userList" class="button button--menu">Admin Panel</a>
			<?php }?>
		</div>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15209838256291ee41a3eb64_20143788', 'top');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11753095426291ee41a40041_94088182', 'messages');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7911469186291ee41a41103_35509640', 'bottom');
?>


    </main>
</body>

</html><?php }
/* {block 'top'} */
class Block_15209838256291ee41a3eb64_20143788 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_15209838256291ee41a3eb64_20143788',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_11753095426291ee41a40041_94088182 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_11753095426291ee41a40041_94088182',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'messages'} */
/* {block 'bottom'} */
class Block_7911469186291ee41a41103_35509640 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_7911469186291ee41a41103_35509640',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
