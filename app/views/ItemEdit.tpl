{extends file="main.tpl"}

{block name=top}
<form class="todo-form" action="{$conf->action_root}itemSave/{$id_list}" method="post">
        <input type="hidden" name="id" value="{$form->id}" title="Title">
    <label class="todo-form-label">Title
        <input class="todo-form-message" type="text" placeholder="Title" name="title" value="{$form->title}" title="Title">
    </label>
    <label class="todo-form-label" for="todoMessage">Task content
        <textarea class="todo-form-message" name="message" value="{$form->message}" placeholder="Enter task content" title="Message">{$form->message}</textarea>
    </label>
    <label class="todo-form-label" >Deadline
        <input class="todo-form-message" type="date" placeholder="Deadline" name="deadline" value="{$form->deadline}" title="Deadline date">
    </label>

    <div>
        <button type="submit" class="button todo-form-button" title="Save task">Save</button>
	    <a class="button todo-form-button" href="{$conf->action_root}itemList/{$id_list}" title="Back to list">Back</a>
    </div>    
</form>

{include file='messages.tpl'}

{/block}
