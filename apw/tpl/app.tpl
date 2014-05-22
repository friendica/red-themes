<div class="app-container">
<a href="{{if $app.alt_url}}{{$app.alt_url}}{{else}}{{$app.url}}{{/if}}" {{if $app.desc}}title="{{$app.desc}}{{if $app.price}} ({{$app.price}}){{/if}}"{{/if}}><img src="{{$app.photo}}" width="80" height="80" />
<div class="app-name">{{$app.name}}</div>
</a>
{{if $purchase}}
<a href="{{$app.page}}" class="btn btn-default" title="{{$purchase}}" ><i class="icon-external"></i></a>
{{/if}}
{{if $install || $update || $delete }}
<form action="appman" method="post">
<input type="hidden" name="papp" value="{{$app.papp}}" />

{{if $install}}<button type="submit" name="install" value="{{$install}}" class="install-app" title="{{$install}}" ></button>{{/if}}
{{if $edit}}<input type="hidden" name="appid" value="{{$app.guid}}" /><button type="submit" name="edit" value="{{$edit}}" class="edit-app" title="{{$edit}}" ></button>{{/if}}
{{if $delete}}<button type="submit" name="delete" value="{{$delete}}" class="delete-app" title="{{$delete}}" ></button>{{/if}}
</form>
{{/if}}
</div>

