{extends file="main.tpl"}

{block name=top}

        <section class="todo-list-container">
            <header class="todo-list-header">
                <h1 class="todo-list-title">
                    Tasks
                </h1>
				
				<a class="button button--add" href="{$conf->action_root}itemNew/{$id_list}">Add Task</a>
				
				<div class="task-list-bar">
                	<form id="search-form" class="todo-list-search-form" onkeyup="ajaxPostForm('search-form','{$conf->action_url}itemTable/{$id_list}','table'); return false;">
                    	<input type="search" placeholder="Task Title" name="sf_title" value="{$searchForm->search}" class="todo-list-search">
						<button type="submit" class="button button--search" title="Search item">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
                	</form>
				</div>
            </header>

            <div class="todo-list" id="table">
				{include file="ItemTable.tpl"}
            </div>
        </section>

{include file='messages.tpl'}

{/block}
