$(function(){

	var div = $('bd-toc-item')

	//ajax
	var a = $('li a:not(.btn)')

	a.click(function(e){
		e.preventDefault();
		(this.attributes[0].value.slice(1) == 'prueba') ? $('main').load('http://127.0.0.1/JFLO/nadales/application/views/'+this.attributes[0].value.slice(1)+'.php') : $('main').load('http://127.0.0.1/JFLO/nadales/application/views/temas/'+this.attributes[0].value.slice(1)+'.php');
	})


})