$(document).ready(function(){
$("#submit").click(function(){
var name = $("#name").val();
var email = $("#email").val();
var password = $("#password").val();
var contact = $("#contact").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1='+ name + '&email1='+ email + '&password1='+ password + '&contact1='+ contact;
if(name==''||email==''||password==''||contact=='')
{
alert("Please Fill All Fields");
}

else
{
// AJAX Code To Submit Form.
$.ajax({
		type: "POST",
		url: "post.php",
		dataType: "html",
		success: function(msg)
		{
			if(parseInt(msg)!=0)
			{
				$('#content').html(msg);
			}
		}
	});
	/*alert('Form Succesfully Submitted');
    $ loadPage('#home');*/
    return false;
}

})
})