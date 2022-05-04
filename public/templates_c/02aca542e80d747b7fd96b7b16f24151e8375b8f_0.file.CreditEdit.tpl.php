<?php
/* Smarty version 4.1.0, created on 2022-05-01 14:32:43
  from '/Applications/XAMPP/xamppfiles/htdocs/kalkulator_kredytowy/app/views/CreditEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_626e7deb897ee3_24306841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02aca542e80d747b7fd96b7b16f24151e8375b8f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/kalkulator_kredytowy/app/views/CreditEdit.tpl',
      1 => 1651406666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_626e7deb897ee3_24306841 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_749060232626e7deb891127_31105732', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_749060232626e7deb891127_31105732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_749060232626e7deb891127_31105732',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
creditSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane kredytu</legend>
		<div class="pure-control-group">
            <label for="value">Wartość</label>
            <input id="value" type="text" placeholder="Wartość" name="value" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->value;?>
">
        </div>
		<div class="pure-control-group">
            <label for="year">Lata</label>
            <input id="year" type="text" placeholder="Lata" name="year" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->year;?>
">
        </div>
		<div class="pure-control-group">
            <label for="percent">Procenty</label>
            <input id="percent" type="text" placeholder="Procenty" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percent;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
creditList">Powrót</a>
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
