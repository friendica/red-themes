<div class="generic-content-wrapper">
<h1>{{$ti_title}}</h1>

{{if $greeting}}<div class="greetins-widget">{{$greeting}}</div>{{/if}}

{{if $ti_connect_url}}<p><a href="{{$ti_connect_url}}">{{$ti_conntext}}</a></p>{{/if}}

{{else}}{{$ti_noconn}}{{/if}}

{{$ti_body}}

{{$ti_share}}


