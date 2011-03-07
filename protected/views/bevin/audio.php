<div id="content"></div>
<div onclick="play()">play</div>
<div onclick="stop()">stop</div>
<audio src="song.ogg" controls="controls"></audio>
<script>
var content = $('#content');
var Player = {
	embed : "<embed src='mms://live.cri.cn/pop' type='application/x-mplayer2'></embed>",
	play: function() {
		content.html("<embed src='mms://61.175.162.94/cctv1' type='application/x-mplayer2'></embed>");
	},
	stop: function(){
		$('#content').html('');
	}
};
function play() {
	Player.play();
}
function stop() {
	Player.stop();
}
</script>