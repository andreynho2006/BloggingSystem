<?php

return "<form method='post' action='admin.php'>
            <p>Login to access restricted data</p>
            <label>e-mail</label><input type='email' name='email' required />
            <label>password</label>
            <input type='password' name='password' required />
            <input type='submit' value='login' name='log-in' />
        </form>";