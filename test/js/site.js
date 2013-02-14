$(function() {
	$('#upload_file').submit(function(e) {
		e.preventDefault();
		$.ajaxFileUpload({
			url 			:'./upload/upload_file/', 
			secureuri		:false,
			fileElementId	:'userfile',
			dataType		: 'json',
			data			: {'username'				: $('#username').val(),
								'password'				: $('#password').val(),
								'nama_lengkap'				: $('#nama_lengkap').val(),
								'jabatan'				: $('#jabatan').val(),
								'departemen'				: $('#departemen').val(),
								'email'				: $('#email').val(),
								'mobile'				: $('#mobile').val(),
								'phone'				: $('#phone').val(),
								'photo'				: $('#photo').val()
			
			},
			success	: function (data, status)
			{
				if(data.status != 'error')
				{
					$('#files').html('<p>Reloading files...</p>');
					refresh_files();
					$('#username').val('');
					$('#password').val('');
					$('#nama_lengkap').val('');
					$('#jabatan').val('');
					$('#departemen').val('');
					$('#email').val('');
					$('#mobile').val('');
					$('#phone').val('');
					$('#photo').val('');
				}
				alert(data.msg);
			}
		});
		return false;
	});

	refresh_files();

	$('.delete_file_link').live('click', function(e) {
		e.preventDefault();
		if (confirm('Are you sure you want to delete this file?'))
		{
			var link = $(this);
			$.ajax({
				url			: './upload/delete_file/' + link.data('file_id'),
				dataType	: 'json',
				success		: function (data)
				{
					if (data.status == "success")
					{
						link.parents('li').fadeOut('fast', function() {
							$(this).remove();
							if ($('#files li').length == 0)
							{
								$('#files').html('<p>No Files Uploaded</p>');
							}
						});
					}
					else
					{
						alert(data.msg);
					}
				}
			});
		}
	});
});

function refresh_files()
{
	$.get('./upload/files/')
	.success(function (data){
		$('#files').html(data);
	});
}