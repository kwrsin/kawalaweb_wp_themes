function search_articles(e) {
    e.preventDefault();
	document.form_search.action = location.href;
	document.form_search.submit();
}