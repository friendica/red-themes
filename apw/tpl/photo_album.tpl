{{include file="prettyphoto.tpl"}}


<div class="photo-album-image-wrapper{{$twist}}" id="photo-album-image-wrapper-{{$id}}">
	<a href="photo/{{$hash}}-0.{{$ext}}" class="photo-album-photo-link" id="photo-album-photo-link-{{$id}}" rel="prettyPhoto[pp_gal]" title="{{$preview}}">
		<img src="{{$imgsrc}}" alt="{{$imgalt}}" title="{{$phototitle}}" class="photo-album-photo lframe resize" id="photo-album-photo-{{$id}}" />
		<p class='caption'>{{$desc}}</p>		
	</a>
</div>
<div class="photo-album-image-wrapper-end"></div>
