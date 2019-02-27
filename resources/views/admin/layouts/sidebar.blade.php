<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">{{auth()->user()->name}}</p>
            <p class="app-sidebar__user-designation">Laravel Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item" href="{{route('category.index')}}"><i class="app-menu__icon fa fa-folder-open"></i><span class="app-menu__label">Categories</span></a></li>
        <li><a class="app-menu__item" href="{{route('tag.index')}}"><i class="app-menu__icon fa fa-folder-open"></i><span class="app-menu__label">Tags</span></a></li>
        <li><a class="app-menu__item" href="{{route('page.index')}}"><i class="app-menu__icon fa fa-folder-open"></i><span class="app-menu__label">Pages</span></a></li>
        <li><a class="app-menu__item" href="{{route('menu.index')}}"><i class="app-menu__icon fa fa-folder-open"></i><span class="app-menu__label">Menus</span></a></li>
        <li><a class="app-menu__item" href="{{route('media.index')}}"><i class="app-menu__icon fa fa-folder-open"></i><span class="app-menu__label">Media</span></a></li>
        <li><a class="app-menu__item" href="{{route('post.index')}}"><i class="app-menu__icon fa fa-folder-open"></i><span class="app-menu__label">Posts</span></a></li>
        <li><a class="app-menu__item" href="{{route('configuration')}}"><i class="app-menu__icon fa fa-folder-open"></i><span class="app-menu__label">Site Configuration</span></a></li>
        <li><a class="app-menu__item" href="{{route('page.home')}}"><i class="app-menu__icon fa fa-folder-open"></i><span class="app-menu__label">Home Page</span></a></li>
    </ul>
</aside>