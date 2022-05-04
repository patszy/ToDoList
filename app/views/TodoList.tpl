{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}todoList">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="Tytuł" name="sf_title" value="{$searchForm->title}" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	

{/block}

{block name=bottom}

<div class="bottom-margin">
<a class="pure-button button-success" href="{$conf->action_root}todoNew">Nowa wiadomość +</a>
</div>	

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>Tytuł</th>
		<th>Wiadomość</th>
		<th>Deadline</th>
		<th>Edycja</th>
	</tr>
</thead>
<tbody>
{foreach $lists as $l}
{strip}
	<tr>
		<td>{$l["title"]}</td>
		<td>{$l["message"]}</td>
		<td>{$l["deadline"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}todoEdit/{$l['id_item']}">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning" href="{$conf->action_url}todoDelete/{$l['id_item']}">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
{include file='messages.tpl'}

{/block}
