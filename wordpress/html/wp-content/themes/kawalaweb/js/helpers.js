function search_articles(e) {
	e.preventDefault();
	if(document.form_search.s.value) {
		document.form_search.submit();
	}
}