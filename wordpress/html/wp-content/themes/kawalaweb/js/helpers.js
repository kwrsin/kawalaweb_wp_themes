function search_articles(e) {
    e.preventDefault();
	document.form_search.action="/";
	document.form_search.submit();
}