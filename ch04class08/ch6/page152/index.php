<!DOCTYPE html>
<html>

<head>
	<title>Check Username</title>
	<style type="text/css">
		body {
			font-family: "Trebuchet MS", Verdana, Arial;
			width: 555px;
		}

		input,
		textarea {
			vertical-align: top;
		}

		label {
			float: left;
			width: 150px;
		}

		#error {
			font-weight: bold;
			color: #ff0000;
		}
		.error{
			color:red;
		}
		.success{ color:green}
	</style>
	<script src="../../../assets/js/jquery-3.6.3.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var checked = false;
			// $('#loginName').keyup(function() {
			$('#loginName').blur(function() {
				$('#error').empty();
				var inputValue = $('#loginName').val();
				//alert(inputValue);
				if (jQuery.trim(inputValue) == '') {
					return false;
				}
				$('#status').removeClass("error success");
				$.post(
					'check.php', {
						username: inputValue
					},
					function(data) {
						if (data) {
							checked = true;
							$('#status').html('Username available').addClass("success");
						} else {
							checked = false;
							$('#status').html('Username already taken').addClass("error");
							return false;
						}
					}
				);
			});
			$('#dosave').click(function() {
				if (checked == false) {
					$('#error').html('Kindly check the username');
					return false;
				} else {
					//alert("inserting uname and pass");
					//insert username and password code here
					$.post("insertformval.php", {
						uname: $('#loginName').val(),
						upass: $('#loginPass').val()
					}, function(result) {
						//alert(result);
						$('#error').html(result);
					});
				}
			});
			$('#loginName').focus(function() {
				checked == false;
			});
		});
	</script>
</head>

<body>
	<fieldset>
		<legend><strong>Register</strong></legend>
		<form action="" method="post" id="loginForm" autocomplete="off">
			<p>
				<label>Username </label>
				<input autocomplete="off" type="text" name="loginName" id="loginName" />
				<!--a href="#" id="check"><strong>Check</strong></a-->
				<span id="status" style="float:right;"></span>
			</p>
			<p>
				<label>Password</label>
				<input type="password" id="loginPass" name="password" />
			</p>
			<p>
				<span id="error"></span>
			</p>
			<p>
				<input type="button" value="Save" name="dos" id="dosave" />
			</p>
		</form>
	</fieldset>
</body>

</html>