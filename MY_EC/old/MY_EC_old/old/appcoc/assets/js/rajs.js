$(document).ready(function(){
	//var mobile_no = '';
	//var email_id  = '';
	$('#dates').datepicker().on('changeDate', function(ev){$('.datepicker').hide();});
	$('#submit_value').click(function(){
		//alert("hello");
		var datess 		  = $('#dates').val();
		if (datess == "") 
		{
		  alert("Enter Date");
		  return false;
		}
		else
		{
			var dates = datess;
		}
		var phone 		  = $('#mobile_no').val();
		var phone_length  = $("#mobile_no").val().length;
		var mobile_no = '';
		if (!$.isNumeric(phone) || phone == "" || phone_length != 10) 
		{
		  alert("Enter Wrong Mobile Number");
		  return false;
		}
		else
		{
			var mobile_no = phone;
		}
		//alert(mobile_no);
		var discription_array = [];
		var count = 0;
		$("input.discription_id").each(function(){
			if($(this).prop('checked')== true )
			{
				var discription_iddd = $( this ).attr('apply_rule_id');
				discription_array[count] = discription_iddd;
				count++;
			}
		});
		//var descp 			= $('#description').val();
		//var description 	= JSON.stringify(descp);
		var descriptionss 	= discription_array.join();
		if ( descriptionss == "") 
		{
		  alert("Select at least one description ");
		  return false;
		}
		else
		{
			var description 	= discription_array.join();
		}
		//alert(description);

		var order_amounts 	= $('#order_amount').val();
		if (!$.isNumeric(order_amounts) ||order_amounts == "") 
		{
		  alert("Enter Order Amount");
		  return false;
		}
		else
		{
			var order_amount = order_amounts;
		}
		var name 			= $('#name').val();
		var selected_weight = $('#selected_weight').val();
		var email_id 		= $('#email_id').val();
		
		var details 		= $('#details').val();
		e_info(dates,mobile_no,name,order_amount,selected_weight,email_id,description,details);
	
	});
	
	$('#login_submit').click(function(){
		var user_name 			= $('#user_name').val();
		var user_pass 			= $('#user_pass').val();
		//alert("hello");
		e_login(user_name,user_pass);
	 });
	
	$('#new_user_submit').click(function(){
		var new_username 			= $('#new_username').val();
		var new_password 			= $('#new_password').val();
		insert_created_user_info(new_username,new_password);
		//alert("hello");
	 });
	 
	$(document).on('click','#update_insert',function(){
		var edit_mobile_no 			= $('#edit_mobile_no').val();
		var edit_email_id 			= $('#edit_email_id').val();
		var old_mobile_no 			= $('#old_mobile_no').val();
		//var email_id 		= $('#email_id').val();
		e_update_info(edit_mobile_no,edit_email_id,old_mobile_no);
		//alert(mobile_no);
		//alert(email_id);
	});
	$(document).on('click','#old_record_chk',function(){
		var phone 		  = $('#mobile_no').val();
		var phone_length  = $("#mobile_no").val().length;
		var mobile_no = '';
		if (!$.isNumeric(phone) || phone == "" || phone_length != 10) 
		{
		  alert("Enter Wrong Mobile Number");
		  return false;
		}
		else
		{
			var mobile_no = phone;
		}
		//alert("RRRRHHHHH");
		show_e_info(mobile_no);
	});
	$(document).on('click','#create_excel_btn',function(){
	//alert("RRR");
	e_create_excel();	
	});

	
});

function e_create_excel()
{
	$.ajax({
		type: "POST",
		url: 'create_excel.php',
		dataType: 'text',
		beforeSend: function()
		{
			$('#show_excel_create').html('<p><center><i class="fa fa-refresh fa-spin"></i></center></p><br>');
		},
		success: function(response)
		{
			$('#show_excel_create').html(response);
			//show_e_info(edit_mobile_no);
		}
	});
}
function e_update_info(edit_mobile_no,edit_email_id,old_mobile_no)
{
	$.ajax({
		type: "POST",
		url: 'update_info.php',
		data: {edit_mobile_no:edit_mobile_no,edit_email_id:edit_email_id,old_mobile_no:old_mobile_no},
		dataType: 'text',
		beforeSend: function()
		{
			$('#prosssing_result_update').html('<p><center><i class="fa fa-refresh fa-spin"></i></center></p><br>');
		},
		success: function(response)
		{
			$('#prosssing_result_update').html(response);
			show_e_info(edit_mobile_no);
		}
	});
}
function popup()
{
	$('.modal').modal();
	$.ajax({
		type: "POST",
		//url: 'insert_new_cond_info.php',
		//data: {new_username:new_username,new_password:new_password},
		dataType: 'text',
		beforeSend: function()
		{
			$('.modal-title').html('Update information');
			//$('.modal-body').html('<center><br><i style="font-size:30px;color:#297D18;" class="fa fa-cog fa-spin"></i><br><br></center>');
			//$('.modal-footer').html('');
		},
		success: function(response)
		{
			//$('#created_success').html(response);
			var footer_html = '<span class="pull-left" id="prosssing_result_update"></span> <button class="btn btn-primary btn-sm" id="update_insert">Click For Update</button>';
			$('.modal-footer').html(footer_html);
			
		}
	});
}

function insert_created_user_info(new_username,new_password)
{
	$.ajax({
		type: "POST",
		url: 'insert_new_cond_info.php',
		data: {new_username:new_username,new_password:new_password},
		dataType: 'text',
		beforeSend: function()
		{
			$('#created_success').html('<p><center><i class="fa fa-refresh fa-spin"></i></center></p><br>');
		},
		success: function(response)
		{
			$('#created_success').html(response);
			
		}
	});
}
function e_login(user_name,user_pass)
{
	$.ajax({
		type: "POST",
		url: 'login.php',
		data: {user_name:user_name,user_pass:user_pass},
		dataType: 'text',
		beforeSend: function()
		{
			$('#login_error').html('<p><center><i class="fa fa-refresh fa-spin"></i></center></p><br>');
		},
		success: function(response)
		{
			if(response == 'Username or Password is invalid')
			{
				$('#login_error').html(response);
			}
			else
			{
				//window.location='admin_login.php';
				window.location.href = response;
				//$('body').html(response);
			}
			
		}
	});
}
function e_info(dates,mobile_no,name,order_amount,selected_weight,email_id,description,details)
{
	$.ajax({
		type: "POST",
		url: 'insert_info.php',
		data: {dates:dates,mobile_no:mobile_no,name:name,order_amount:order_amount,selected_weight:selected_weight,email_id:email_id,description:description,details:details},
		dataType: 'text',
		beforeSend: function()
		{
			$('#prosssing').html('<p><center><i class="fa fa-refresh fa-spin"></i></center></p><br>');
		},
		success: function(response)
		{
			$('#prosssing').html(response);
			//show_e_info(mobile_no,name); raj last change
			show_e_info(mobile_no);
			$("input[type='checkbox']").prop({checked: false});
			$('#selected_weight').val('-1')
			$("#dates").attr("placeholder", "Enter Date").val("").focus().blur();
			$("#order_amount").attr("placeholder", "Enter Order Amount").val("").focus().blur();
			$("#details").attr("placeholder", "Enter Details").val("").focus().blur();
			$("#name").attr("placeholder", "Enter Name").val("").focus().blur();
			$("#email_id").attr("placeholder", "Enter Email ID").val("").focus().blur();
			$("#mobile_no").attr("placeholder", "Enter Email ID").val("").focus().blur();
			
		}
	});
}
function show_e_info(mobile_no)
{
	$.ajax({
		type: "POST",
		url: 'show_info.php',
		data: {mobile_no:mobile_no},
		dataType: 'text',
		beforeSend: function()
		{
			$('#prosssings').html('<p><center><i class="fa fa-refresh fa-spin"></i></center></p><br>');
		},
		success: function(response)
		{
			$('#prosssings').html(response);
		}
	});
}
