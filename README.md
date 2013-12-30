
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



<b>Notes API</b>


Post to run commands
<pre>note</pre>

Commands:
<ul>
<li>update</li>
<li>get</li>
<li>remove</li>
</ul>




<b>update:</b>
Updates or adds a note.

Other Posts Required:
<pre>
noteID (OPTIONAL)
noteData
userID
</pre>

Returns:
<pre>
Note ID
</pre>

EXAMPLE:
<pre>
index.php?note&update&AUTHID&userID=1&noteID=1&noteData=THSI IS A NOTE
</pre>

<b>get:</b>
Gets the specified ID

Other posts required:
<pre>
noteID
</pre>

Returns:
<pre>
Note Data JSON Array
</pre>

EXAMPLE:
<pre>
index.php?note&get&AUTHID&noteID=5
</pre>

<b>remove:</b>
Removes note for specific ID

Other posts required:
<pre>
noteID
</pre>


Returns:
<pre>
1 = success
</pre>

EXAMPLE: 
<pre>
index.php?note&remove&AUTHID&noteID=5
</pre> 