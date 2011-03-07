function addFavorite() {
	if ($.browser.msie)
		window.external.addFavorite(window.location.href, document.title);
	else if ($.browser.mozilla)
		window.sidebar.addPanel(document.title, window.location.href, "");
	else 
		alert('加入收藏失败,请手动添加.');
	return false;
}

function setHomepage(obj)
{
	if ($.browser.msie) {
		obj.style.behavior='url(#default#homepage)';
		obj.setHomePage(getHost());
	} else 
		alert('您使用的浏览器不地支持此操作');
	return false;
}