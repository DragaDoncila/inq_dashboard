# inq_dashboard
Includes a html/css/bootstrap shell of what the dashboard might look like.
index.php is the controller of the website serving the register page first.

The register page creates a new user entry in the dashboard database inside of users table.
The table includes id / name/ email address/ password and a datastamp which is currently not working.
A new user will not be submitted if one of the fields are empty or invalid

After clicking submit the index.php shows the login page to the user
Upon logging in the users username and password will be matched with whats in the users table. This is as far as I have currently got.

The way the passwords are stored currently is not 100% secure and need to be encoded with something like a hash() key.

After matt has finished the logic of the booking system I planned to merge it into this website.
