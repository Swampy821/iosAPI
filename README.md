
Authorization for use.
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

    </ul>


    

    Valid:
        Validate that user exists and password is correct. 
        
        Other Posts Required:
        <pre>
            username
            password
        </pre>

        EXAMPLE: 
        <pre>
                index.php?user&valid&username=USERA&password=PASSWORDA
        </pre>