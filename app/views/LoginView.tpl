{extends file="main.tpl"}

{block name=top}
<form action="{$conf->action_root}login" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="pure-control-group">
			<label>Login:
				<input type="text" name="login"/>
			</label>
		</div>
        <div class="pure-control-group">
			<label>Password:
				<input type="password" name="password" /><br />
			</label>
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	
{include file='messages.tpl'}

{/block}
