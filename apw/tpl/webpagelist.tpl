{{include file="prettyphoto.tpl"}}

{{if $pages}}

	   <div id="pagelist-content-wrapper" class="generic-content-wrapper">
		{{foreach $pages as $key => $items}} 
				{{foreach $items as $item}}
					<div class="page-list-item">
					{{if $edit}}<a href="{{$baseurl}}/{{$item.url}}">{{$edit}}</a> | {{/if}}
					{{if $view}}<a href="page/{{$channel}}/{{$item.pagetitle}}">{{$view}}</a> {{$item.title}} | {{/if}}
					{{if $preview}} <a href="page/{{$channel}}/{{$item.pagetitle}}?iframe=true&width=80%&height=80%" rel="prettyPhoto[iframes]">Preview</a> {{/if}}
					{{if $widget}}<a href="page/{{$channel}}/{{$item.pagetitle}}">{{$item.title}}</a>{{/if}}

</div>
				{{/foreach}}
		{{/foreach}}
	   </div>
	
	   <div class="clear"></div>

{{/if}}