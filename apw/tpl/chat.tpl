<script>
$(function(){

  $('.chat').on('keyup', function(e){
      if (e.keyCode == 13 && e.shiftKey) {
    }

    else if
    (e.keyCode == 13) {

      $(this).parent('form').trigger('submit');
    }
  });
});
</script>

    <div id="chatUsers" style="float: right; width: 120px; height: 100%; border: 1px solid #000;" ></div>

<div class="generic-content-wrapper">
<h1>{{$room_name}}</h1>
<div id="chatContainer" style="height: 100%; width: 95%;">

    <div id="chatTopBar" style="float: left; height: 400px; width: 95%; overflow-y: auto;">
    	<div id="chatLineHolder"></div>
	</div>


	<div class="clear"></div>
    <div id="chatBottomBar" style="position: relative; bottom: 0; margin-top: 20px;">
        <div class="tip"></div>

        <form id="chat-form" method="post" action="#">
			<input type="hidden" name="room_id" value="{{$room_id}}" />
            <textarea id="chatText" name="chat_text" class="chat" rows=3 cols=80></textarea><br />
        </form>

    </div>
<a href="{{$baseurl}}/chat/{{$nickname}}/{{$room_id}}/leave">{{$leave}}</a> | <a href="{{$baseurl}}/chatsvc?f=&room_id={{$room_id}}&status=away">{{$away}}</a> | <a href="{{$baseurl}}/chatsvc?f=&room_id={{$room_id}}&status=online">{{$online}}</a>{{if $bookmark_link}} | <a href="{{$bookmark_link}}" target="_blank" >{{$bookmark}}</a>{{/if}}

</div>
</div>
<style>
section {
	padding-bottom: 0;
}
</style>

<script>
var room_id = {{$room_id}};
var last_chat = 0;
var chat_timer = null;

$(document).ready(function() {
	chat_timer = setTimeout(load_chats,300);

});


$('#chat-form').submit(function(ev) {
	$('body').css('cursor','wait');
	$.post("chatsvc", $('#chat-form').serialize(),function(data) {
			if(chat_timer) clearTimeout(chat_timer);
			$('#chatText').val('');
			load_chats();
			$('body').css('cursor','auto');
		},'json');
	ev.preventDefault();
});

function load_chats() {

	$.get("chatsvc?f=&room_id=" + room_id + '&last=' + last_chat + ((stopped) ? '&stopped=1' : ''),function(data) {

		if(data.success && (! stopped)) {
			update_inroom(data.inroom);
			update_chats(data.chats);
		}
	});
	
	chat_timer = setTimeout(load_chats,10000);

}

function update_inroom(inroom) {
	var html = document.createElement('div');
	var count = inroom.length;
	$.each( inroom, function(index, item) {
		var newNode = document.createElement('div');
		$(newNode).html('<img style="height: 32px; width: 32px;" src="' + item.img + '" alt="' + item.name + '" /> ' + item.status + '<br />' + item.name + '<br/>');
		html.appendChild(newNode); 		
	});
	$('#chatUsers').html(html);	
}

function update_chats(chats) {

	var count = chats.length;
	$.each( chats, function(index, item) {
		last_chat = item.id;
		var newNode = document.createElement('div');
		$(newNode).html('<div style="margin-bottom: 5px; clear: both;"><img style="height: 32px; width: 32px; float: left;" src="' + item.img + '" alt="' + item.name + '" /><div class="chat-body" style="float: left; width: 80%; margin-left: 15px; font-size: 14px;">' + item.text + '</div></div>');
		$('#chatLineHolder').append(newNode);
		$(".autotime").timeago();

		});
	var elem = document.getElementById('chatTopBar');
	elem.scrollTop = elem.scrollHeight;

}

</script>
