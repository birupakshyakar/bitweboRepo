$(".change").on('click', function(){
	//alert("test");
	$(".change").removeClass('active');
	$(this).addClass('active');
});
function inquiry(){
	alert("gfgf");
}
function openModal(id)
{
	$("#"+id).modal();
}


function sendPartnerRequest(name,mobile_number,mail_id,message)
{
	if(name!="" && mobile_number!="" && mail_id!="" && message!="")
	{
		var data = { 
						"name" : name,
						"mobile" : mobile_number,
						"email" : mail_id,
						"message" : message
					}
		console.log(JSON.Stringify(data));
		/*$.ajax({
			url: "sendEmail.php",
			method: "POST",
			data: data,
			success: function(response){
				if(response.trim() == "success")
				{
					alert("Message sent successfully");
				}
				else{
					alert("Error while sending message");
				}
				
			}
		});*/

	}
	else
	{
		alert("Please fill all values");
	}
}


