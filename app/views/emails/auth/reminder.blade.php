<html>
	<head>
		<title>Password Reset</title>
	</head>
	<body>

				<h2>Password Reset</h2>

				<p>To reset your password, complete this form: {{ URL::to('password/reset', array($token)) }}.<br/>
				This link will expire in {{ Config::get('auth.reminder.expire', 60) }} minutes.</p>

	</body>
</html>
