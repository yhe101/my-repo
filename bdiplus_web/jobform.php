<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BDIplus</title>	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/careers.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="js/careers.js"></script>
</head>
<body style="width:90%">
	<div class="row">
        <div class="col-sm-4 col-sm-offset-5">
            <div class="job-form">                
                    <form id="job-form" name="job-form" method="post" action="addjob.php">
                            <div class="form-group" style="width:50%">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
								<div class="form-group">
                                    <input type="text" name="address" class="form-control" placeholder="Address" required>
                                </div>
								<div class="form-group" style="width:50%">
                                    <input type="phone" name="phone" class="form-control" placeholder="Phone" required>
                                </div>
                                <div class="form-group" style="width:50%">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group" style="width:50%">
                                    <input type="text" name="linkedin" class="form-control" placeholder="LinkedIn" required>
                                </div>
								<input type="text" id="jobid" name="jobid" class="form-control" style="display:none;">
								<iframe src="apply.php" id="uploadFrame" name="uploadFrame" style="height:100px;width:100%;border:0;"></iframe>  								
                                <button type="submit" class="btn btn-info job-submit">Submit</button>
                            </form>
            </div>
        </div>
	</div>

<script>
$(document).ready(function() {
	$('#jobid').val(parent.jobid);
});
</script>	
	
</body>
</html>