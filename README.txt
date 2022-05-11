=========================================================================
	FINAL WEB PROJECT MADE BY 519K0013, 519K0054 and 519K0060
=========================================================================

[IMPORTANT]:
In order to properly run this project, please use softwares like XAMPP or WAMP to create a web server. Then go to phpmyadmin to create a database using the 'registration.sql' file stored in the folder 'php'
-------------------------------------------------------------------------

<< Check app's info >>
	> Click on the app's icon

<< Check app by category >>
	> Click 'CATEGORY' on the top menu
	> Click the arrow button to see apps belong to that category.

<< Search for an app >>
	> Enter the app's name into the search bar.
	> Press 'Enter'.

<< Create an account >>
	> Click 'ACCOUNT' on the top menu.
	> Click 'Sign Up'.
	> Fill in the form.
	> Click 'REGISTER'.

<< Log in an account >>
	> Click 'ACCOUNT' on the top menu.
	> Click 'Log in'.
	> Enter username and password.
	> Click 'LOGIN'.
-------------------------------------------------------------------------
Check.php: Used to create connection from the website to the database
errors.php: Used to display errors if ther's any
host.php: Used to store the functions for user's registration and logging in
	-in which:
		+mysqli_real_escape_string: Used to encoded the string to protect the password from database attacks
		+if (isset($_POST['reg_user'])): used for user to add new username to database, if email or username already exist, return error
		+if (isset($_POST['login_user'])): used for users to enter their created username and password, if it doens't match the username in database it will return an error
landing.php: used in host.php to allow the user to:
	+log in with the created username if the user is registering
	+allow the user to logout or go to the home page of the website
login.php: let the user enter their username and password, then check if the entered name and password match the ones in the database
logout.php: let the user logout from the current username (not functioning)
register.php: let the users fill the form to create their usernames and password, username and email has to be unique to be able to register
