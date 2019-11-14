function login(){
	var un=$('#un').val();
	var ps=$('#ps').val();
	data={'un':un,'ps':ps};
	$.post('home/login',data,function(fb){
		if (fb.match('1')) {
			window.location.href=('home/dashbord');
		}else{
			alert('wrong user');
		}
	});

	
}