{{include file="prettyphoto.tpl"}}
<div class="generic-content-wrapper">

<h1>{{$dirlbl}}</h1>
{{if $search}}
<h4>{{$finddsc}} {{$safetxt}}</h4> 
{{/if}}
{{foreach $entries as $entry}}

{{include file="direntry.tpl"}}

{{/foreach}}

<div class="directory-end"></div>

{{$next}}

</div>
