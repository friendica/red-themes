<div class="pmenu{{if $class}} {{$class}}{{/if}}">
{{if $menu.menu_desc}}
  <h3 class="pmenu-title">{{$menu.menu_desc}}</h3>
{{/if}}
{{if $edit}}
<a href="mitem/{{$menu.menu_id}}" title="{{$edit}}"><i class="icon-pencil fakelink" title="{{$edit}}"></i></a>
{{/if}}
{{if $items }}
<ul class="pmenu-body">
<div class="menu-wrapper">
{{foreach $items as $mitem }}
<ul class="pmenu-item"><a href="{{$mitem.mitem_link}}" {{if $mitem.newwin}}target="_blank"{{/if}}>{{$mitem.mitem_desc}}</a></ul>
{{/foreach }}
</div>
</ul>
{{/if}}
<div class="pmenu-end"></div>
</div>

