{{$listtitle}}
{{if $pages}}
<div class="generic-content-wrapper">
<table class="webpage-list-table">
<tr><td>{{$actions_txt}}</td><td>{{$pagelink_txt}}</td><td>{{$title_txt}}</td><td>{{$created_txt}}</td><td>{{$edited_txt}}</td></tr>
{{foreach $pages as $key => $items}}
{{foreach $items as $item}}
<tr>
    <td>
        {{if $edit}}<a href="{{$baseurl}}/{{$item.url}}" title="{{$edit}}">{{$edit}}</a> {{/if}}
        {{if $view}}<a href="page/{{$channel}}/{{$item.pagetitle}}" title="{{$view}}">{{$view}}</a> {{/if}}
        {{if $preview}}<a href="page/{{$channel}}/{{$item.pagetitle}}?iframe=true&width=80%&height=80%" title="{{$preview}}">{{$preview}}</a> {{/if}}
    </td>
<td>
    {{if $view}}<a href="page/{{$channel}}/{{$item.pagetitle}}" title="{{$view}}">{{$item.pagetitle}}</a>
    {{else}}{{$item.pagetitle}}
    {{/if}}
     </td>
    <td>
        {{$item.title}}
    </td>
    <td>
        {{$item.created}}
    </td>
    <td>
        {{$item.edited}}
    </td>
    </tr>
{{/foreach}}
{{/foreach}}

 </table>
</div>

	   <div class="clear"></div>

{{/if}}
