<div id="apps-wrapper">
<!---//FIX ME - pass $sitename to the template.  It's not possible to reuse header here -->
<h1>The Red Matrix</h1>
<div class="generic-content-wrapper">
{{foreach $apps as $ap}}
<div class="app-container">
{{$ap}}
</div>
{{/foreach}}
<div class="clear"></div>
</div>
