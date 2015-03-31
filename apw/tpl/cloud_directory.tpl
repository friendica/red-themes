<div class="generic-content-wrapper">
<h1>{{$header}}</h1>
<table id="cloud-index">
	<tr>
		<th></th>
		<th>{{$name}}&nbsp;&nbsp;&nbsp;</th>
		<th></th><th></th><th></th>
		<th>{{$type}}&nbsp;&nbsp;&nbsp;</th>
		<th>{{$size}}&nbsp;&nbsp;&nbsp;</th>
		<th>{{$lastmod}}</th>
	</tr>
	<tr><td colspan="8"><hr></td></tr>
{{if $parentpath}}
	<tr>
		<td>{{$parentpath.icon}}</td>
		<td><a href="{{$parentpath.path}}" title="{{$parent}}">..</a></td>
		<td></td><td></td><th></td>
		<td>[{{$parent}}]</td>
		<td></td>
		<td></td>
	</tr>
{{/if}}
{{foreach $entries as $item}}
	<tr>
		<td>{{$item.icon}}</td>
		<td style="min-width: 15em"><a href="{{$item.fullPath}}">{{$item.displayName}}</a></td>
{{if $item.is_owner}}
		<td>{{$item.attachIcon}}</td>
		<td style="position:relative;"><a href="{{$item.fileStorageUrl}}/{{$item.attachId}}/edit" title="{{$edit}}"><i class="icon-pencil btn btn-default"></i></a></td>
		<td><a href="{{$item.fileStorageUrl}}/{{$item.attachId}}/delete" title="{{$delete}}" onclick="return confirmDelete();"><i class="icon-remove btn btn-default drop-icons"></i></a></td>
{{else}}
		<td></td><td></td><td></td>
{{/if}}
		<td>{{$item.type}}</td>
		<td>{{$item.sizeFormatted}}</td>
		<td>{{$item.lastmodified}}</td>
	</tr>
{{/foreach}}
	<tr><td colspan="8"><hr></td></tr>
</table>

{{if $quota.limit || $quota.used}}
	<p><strong>{{$total}}</strong> {{$quota.desc}}</p>
{{/if}}
</div>
