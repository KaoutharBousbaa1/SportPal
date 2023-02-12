<!DOCTYPE HTML>
<HTML>
    <head>
        <link rel = "stylesheet", href = "Signin.css" />
        <link rel = "stylesheet" href = "./shadow.css"/>
        <title>Authentification Space</title>
    </head>
    <body>
            <table>
            <form action = "verification.php" method = "post">
            <tr>
                <th>
                    <div class = "sectionone">
                        <h3>SIGN IN</h3>
                        <br/>
                        <input type = "text" name = "login" placeholder = "LOGIN">
                        <br/>
                        <input type = "password" name = "pass" placeholder = "PASSWORD">
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <input type = "submit" value = "Access"/>
                        <br/><br/>
                        <span class = "createaccount">You don't have an account? <a href = "Signup.php">Create one here</a></span>
                    </div>
                </th>
                <th>
                    <div class = "sectiontwo">
                        <image src = "auth.png" width = "410" height = "372" style = "border-top-right-radius: 0.12cm; border-bottom-right-radius: 0.12cm;"/>
                    </div>
                </th>
            </tr>
            </form>
            </table>
    </body>
</HTML>