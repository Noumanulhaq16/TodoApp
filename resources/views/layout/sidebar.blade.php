<div id="sidebar" class="app-sidebar">

    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

        <div class="menu">
            <!-- <div class="menu-item active">
                <a href="/" class="menu-link">
                    <span class="menu-icon"><i class="bi bi-list"></i></span>
                    <span class="menu-text">Todo List</span>
                </a>
            </div> -->
            <div class="menu-item">
                <a href="{{route('showAddTask')}}" class="menu-link">
                    <span class="menu-icon"><i class="bi bi-plus"></i></span>
                    <span class="menu-text">Add Task</span>
                </a>

                <a href="{{route('showcategory')}}" class="menu-link">
                    <span class="menu-icon"><i class="bi bi-plus"></i></span>
                    <span class="menu-text">Add Category</span>
                </a>

                <a href="{{route('showfilterpage')}}" class="menu-link">
                    <span class="menu-icon"><i class="bi bi-plus"></i></span>
                    <span class="menu-text">Task Filter</span>
                </a>
            </div>
        </div>
    </div>

</div>
