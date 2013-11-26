{{*
 *	AUTOMATICALLY GENERATED TEMPLATE
 *	DO NOT EDIT THIS FILE, CHANGES WILL BE OVERWRITTEN
 *
 *}}
<section class="entry-content">
<h1 class="entry-title">{{$title}} - {{$page}}</h1>
<table cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
        <th>{{$queues.label}}</th>
        <td>{{$queues.deliverq}} - {{$queues.queue}}</td>
    </tr>
    <tr>
        <th>{{$pending.0}}</th>
        <td>{{$pending.1}}</td>
    </tr>
    <tr>
        <th>{{$users.0}}</th>
        <td>{{$users.1}}</td>
    </tr>  
	{{foreach $accounts as $p}}
    <tr>
        <th>{{$p.0}}</th>
        <td>{{if $p.1}}{{$p.1}}{{else}}0{{/if}}</td>
    </tr>
	{{/foreach}}

	<tr>
        <th>{{$plugins.0}}</th>
        <td>
		{{foreach $plugins.1 as $p}}
			{{$p}}<br/>
		{{/foreach}}
        </td>
	</tr>

	<tr>
		<th>{{$version.0}}</th>
		<td>{{$version.1}} - {{$build}}</td>
	</tr>

    </tbody>
</table>

</section>
