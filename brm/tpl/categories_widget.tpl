<!-- This file has been taken from the theme nuclear -->
<script>
<!--
function land(ref, target)
{
lowtarget=target.toLowerCase();
if (lowtarget=="_self") {window.location=loc;}
else {if (lowtarget=="_top") {top.location=loc;}
else {if (lowtarget=="_blank") {window.open(loc);}
else {if (lowtarget=="_parent") {parent.location=loc;}
else {parent.frames[target].location=loc;};
}}}
}
function jump(menu)
{
ref=menu.choice.options[menu.choice.selectedIndex].value;
splitc=ref.lastIndexOf("*");
target="";
if (splitc!=-1)
{loc=ref.substring(0,splitc);
target=ref.substring(splitc+1,1000);}
else {loc=ref; target="_self";};
if (ref != "") {land(loc,target);}
}
//-->
</script>

<div id="categories-sidebar" class="widget">
	<h3>{{$title}}</h3>
	<div id="categories-sidebar-desc">{{$desc}}</div>
	
	<a href="{{$base}}" class="categories-link categories-all{{if $sel_all}} categories-selected{{/if}}">{{$all}}</a>
	<form action="{{$action}}" method="post"><select name="choice" size="1" onChange="jump(this.form)">
		{{foreach $terms as $term}}
	<option value="{{$base}}?f=&cat={{$term.name}}" class="categories-link{{if $term.selected}} categories-selected{{/if}}">{{$term.name}}</option>
		{{/foreach}}
	</select>
	</form>
</div>
