<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>The Wherehouse</title>
		<link href="./assets/styles/reset.css" rel="stylesheet" type="text/css" />
		<link href="./assets/styles/landing.css" rel="stylesheet" />
		<script src="./assets/js/index.js" defer></script>
	</head>
	<body>
		<div class="wrapper">
			<div class="blank"></div>

			<div class="center">
				<h1 class="title">
					THE <span>W</span><span>H</span><span>E</span><span>R</span
					><span>E</span>HOUSE
				</h1>

				<p class="stayUpdated">
					STAY UPDATED ON EVERYTHING WHEREHOUSE
				</p>

				<form method="post" name="emailForm" action="landingemail.php">
					<input
						type="email"
						name="email"
						id="newsletterSignup"
						placeholder="EMAIL"
					/>
					<input
						id="signupButton"
						type="submit"
						value="Submit"/>
					</form>
			</div>

			<div class="login">
					<button id ='loginButton' type='button' name = 'password'>Enter Password</button>
			</div>

<div class="form-popup" id="myForm">
  <form class="form-container">	
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id='password' name="psw" required>

    <button type="button" id='loginFormBtn' class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
		</div>
	</body>
	<script defer>
		const loginButton = document.getElementById('loginButton');
		const modal = document.querySelector('.form-popup');
		const loginFormBtn = document.getElementById('loginFormBtn');
		loginButton.addEventListener('click', ()=>{
			modal.style.display='block';
		});

		loginFormBtn.addEventListener('click', () => {
			const input = document.getElementById('password').value;
			if (input === 'admin') {
				window.location.href = 'https://gentle-sands-58834.herokuapp.com/';
			}
			else {
				alert ('try again - incorrect password');
			}
		})

		const closeForm = () => {
			modal.style.display = 'none';
		}

	</script>
</html>
