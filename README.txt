################################################################################
##                             SETTING XAMPP                                 ##
################################################################################
The laravel project can be opened using xampp but it needs some configuration.
Step 1: Go to xampp/apache/conf/extra.
Step 2: Open the file 'httpd-vhosts.conf'
Step 3: Add the following code:

<VirtualHost *:80>
    ServerAdmin project_name.com
    DocumentRoot "C:/xampp/htdocs/project_name/public"
    ServerName project_name.com
</VirtualHost>

Step 4: Open your notepad and run as administrator.
Step 5: In the file tab, click open or press Ctrl+O
Step 6: Open C:\Windows\System32\drivers\etc
Step 7: Select All Files from the File Type.
Step 8: Open hosts
Step 9: Add the following code at the bottom of the file.

127.0.0.1 project_name.com

Step 10: Refresh Apache from your XAMPP Control Panel.

You can now open the file using the url you specified above. For more Information, You can visit
https://medium.com/@ajtech.mubasheer/configure-a-virtual-host-for-laravel-project-in-xampp-for-windows-10-d3f0068e7e1b

################################################################################
##                           Setting Up Laravel                               ##
################################################################################

In order to open the project you will need to the the following.

Step 1: Rename "- Copy.env" to ".env"
Step 2: Install "Git".
Step 3: Install "node.js".
Step 4: Execute "composer install" using your terminal
Step 5: Using your browser, go to localhost/phpmyadmin.
Step 6: Create a database in your localhost/phpmyadmin. The name of the database is "laravel".
Step 7: Run "php artisan migrate".
Step 8: Open the Project using the url specified in the configuration.