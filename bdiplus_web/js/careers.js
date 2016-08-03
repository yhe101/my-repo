$('.details').on('click', function (e) {
		$('#jobtitle').html($(this).data('title'));
		$('#jobarea').html($(this).data('area'));
		$('#joblocation').html($(this).data('location'));
		$('#jobdesc').html($(this).data('desc'));    
	});
	
	var jobid=0;
	$('.applyBtn').on('click',function (e) {
		jobid=$(this).data('reqid');				
	});
	
	$('.job-submit').on('click',function (e) {
		$('#jobid').val(jobid);		
	});	
	
	 $("#applyModal").on('show.bs.modal', function () {	
		if(window.frames['applyFrame'])
		{
			window.frames['applyFrame'].location.reload();
		}	
		
		/*if(window.frames[0])
		{			
			if(window.frames[0].document.getElementById('jobid'))
			window.frames[0].document.getElementById('jobid').value=jobid;  		
		}	*/
    });
	
// Contact form
	var jobform = $('#job-form');
	jobform.submit(function(event){
		event.preventDefault();
		var form_status = $('<div class="form_status"></div>');
		$.ajax({
			url: $(this).attr('action'),
			beforeSend: function(){
				jobform.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i>Saving details...</p>').fadeIn() );
			}
		}).success(function(msg){
			form_status.html('<p class="text-success">'+msg+'</p>').delay(3000).fadeOut();			
		});
	});	
	
	
	