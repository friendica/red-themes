<link rel="stylesheet" media="screen" type="text/css" href="library/colorpicker/css/colorpicker.css" />
<script type="text/javascript" src="library/colorpicker/js/colorpicker.js"></script>
<script>
$(document).ready(function() {
        $('#id_apw_item_colour, #id_apw_font_colour, #id_apw_background_colour').ColorPicker({
                onSubmit: function(hsb, hex, rgb, el) {
                        $(el).val(hex);
                        $(el).ColorPickerHide();
                },
                onBeforeShow: function () {
                        $(this).ColorPickerSetColor(this.value);
                }
        }).bind('keyup', function(){
                $(this).ColorPickerSetColor(this.value);
        });
});
</script>

{{include file="field_select.tpl" field=$schema}}


{{include file="field_input.tpl" field=$background}}

{{include file="field_select.tpl" field=$bgattach}}

{{include file="field_select.tpl" field=$font}}

{{include file="field_select.tpl" field=$iconpath}}

<div class="settings-submit-wrapper">
	<input type="submit" value="{{$submit}}" class="settings-submit" name="apw-settings-submit" />
</div>

<hr />

{{if $expert}}
<h1>Fine tuning</h1>

{{include file="field_input.tpl" field=$bigshadow}}

{{include file="field_input.tpl" field=$smallshadow}}

{{include file="field_input.tpl" field=$shadowcolour}}

{{include file="field_input.tpl" field=$radius}}

{{include file="field_input.tpl" field=$font_size}}

{{include file="field_input.tpl" field=$line_height}}

{{include file="field_input.tpl" field=$bgcolour}}

{{include file="field_input.tpl" field=$sectionbackground}}

{{include file="field_input.tpl" field=$sectioncolour}}

{{include file="field_input.tpl" field=$item_colour}}

{{include file="field_input.tpl" field=$link_colour}}

{{include file="field_input.tpl" field=$width}}

{{include file="field_input.tpl" field=$minwidth}}

{{include file="field_input.tpl" field=$gcrwidth}}

{{include file="field_input.tpl" field=$font_colour}}

{{include file="field_input.tpl" field=$scaling}}

{{include file="field_input.tpl" field=$opacity}}

{{include file="field_select.tpl" field=$symmetry}}

{{include file="field_select.tpl" field=$aside}}

{{include file="field_select.tpl" field=$nav}} 

<div class="settings-submit-wrapper">
	<input type="submit" value="{{$submit}}" class="settings-submit" name="apw-settings-submit" />
</div>


<h2>Advanced - not not touch these options if you do not know what you are doing</h2>

{{include file="field_input.tpl" field=$itemfloat}}

{{include file="field_input.tpl" field=$sectionleft}}

{{include file="field_input.tpl" field=$sectionright}}

{{include file="field_input.tpl" field=$sectionwidth}}

{{include file="field_input.tpl" field=$asideleft}}

{{include file="field_input.tpl" field=$asideright}}



<div class="settings-submit-wrapper">
	<input type="submit" value="{{$submit}}" class="settings-submit" name="apw-settings-submit" />
</div>
{{/if}}
