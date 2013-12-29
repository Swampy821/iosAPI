
<b>Setup</b>

To setup you must have a database named iosAPI. Using the terminal navigate to the root directory and run
<pre>
php ladder.php migrate
</pre> 

This will run all migrations and get your database up to date. 

<b>Authorization for use.</b>

You can set authorization codes within the authConfig.php file. You send it through as an empty post
otherwise you will get a not authorized error. 

EXAMPLE:
<pre>
index.php?AUTHCODE
</pre>


<b>User API</b>

Post to run commands
<pre>user</pre>

Commands:
<ul>
<li>valid</li>
<li>add</li>
</ul>




<b>Valid:</b>
Validate that user exists and password is correct. 

Other Posts Required:
<pre>
username
password
</pre>

Returns:
<pre>
1 or 0. 
1 = Valid User
0 = Invalid User
</pre>

EXAMPLE: 
<pre>
index.php?user&valid&username=USERA&password=PASSWORDA
</pre>


<b>add:</b>
Adds user to database.

Other Posts Required:
<pre>
username
password
</pre>

Returns:
<pre>
Insert ID or error
</pre>

EXAMPLE
<pre>
index.php?user&add&username=USERB&password=PASSWORDB
</pre>