{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}todoSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane kredytu</legend>
		<div class="pure-control-group">
            <label for="title">Tytuł</label>
            <input id="title" type="text" placeholder="Tytuł" name="title" value="{$form->title}">
        </div>
		<div class="pure-control-group">
            <label for="message">Wiadomość</label>
            <input id="message" type="text" placeholder="Wiadomość" name="message" value="{$form->message}">
        </div>
		<div class="pure-control-group">
            <label for="deadline">Deadline</label>
            <input id="deadline" type="date" placeholder="Deadline" name="deadline" value="{$form->deadline}">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}todoList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="{$form->id}">
</form>	
</div>
{include file='messages.tpl'}

{/block}
