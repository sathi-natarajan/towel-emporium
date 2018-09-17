<!doctype html>
<html>
 
<head>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title>Laravel</title>
</head>
 
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8"> 
		<div>
			<p>Email from a visitor to your site:</p>
			Full name: {{$fullname}}<br/>
			Email address: {{$email}}<br/>
			Comments and Suggestions:<br/>
			{{$cands}}<br/>
			Needs newsletter:{{$newsletter}}
		</div>
    </div>
</div>
</body>
 
</html>