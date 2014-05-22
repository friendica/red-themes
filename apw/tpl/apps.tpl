<div class="generic-content-wrapper">
{{foreach $apps as $ap}}
<div class="app-container">
<a href="{{$ap.url}}" {{if $ap.hover}}title="{{$ap.hover}}"{{/if}}><img src="{{$ap.photo}}" width="80" height="80" />
<div class="app-name">{{$ap.name}}</div>
</a>
</div>
{{/foreach}}
<div class="clear"></div>
</div>
