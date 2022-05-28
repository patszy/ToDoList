{extends file="main.tpl"}

{block name=top}

        <section class="todo-list-container">
            <header class="todo-list-header">
				<h1 class="todo-list-title">
                    Lists
                </h1>

				{if !empty($conf->roles['role'])}
					<a class="button button--add" href="{$conf->action_root}todoNew">Add List</a>
				{/if}
				
				
				<div class="task-list-bar">	
                	<form id="search-form" class="todo-list-search-form" onkeyup="ajaxPostForm('search-form','{$conf->action_url}todoTable','table'); return false;">
                    	<input type="search" placeholder="List Title" name="sf_title" value="{$searchForm->search}" class="todo-list-search">
						<button type="submit" class="button button--search"   title="Search">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
                	</form>
				</div>
            </header>

			<div class="todo-list" id="table">
				{include file="TodoTable.tpl"}
			</div>
        </section>

{include file='messages.tpl'}

{/block}
