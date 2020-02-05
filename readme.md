# This repository records self-study lessons of a PHP amateur.

* lesson-001-hello-world: "hello world" example from [Tutorialspoint](https://www.tutorialspoint.com/php/php_introduction.htm)
* lesson-002-post-request: handling of form registration using POST method, example from [guru99.com](https://www.guru99.com/php-forms-handling.html)
* lesson-003-mysql: test a connection to MySQL. Before that, I used the GUI of MySQL Workbench to create a new user and set __Authentication Type: Standard__
* lesson-004-swiftmailer: send email with SwiftMailer.
* lesson-005-sqlsrv: test a connection to SQL Server.

## Composer - Dependency management tool for PHP projects.

* Download from [https://getcomposer.org/](https://getcomposer.org/), install it and setup environment variable __Path__.
* How to initialize a __composer.json__: CMD to your repo/project root folder. Run command __composer init__, press Enter and follow instructions in the console after that. During this you will instruct the console what __vendor__, __project name__ and which __version__ (from __Github__) on which your project depends.
* After creating __composer.json__ successfully. You can run command __composer update__. As the result, composer will create a __vendor__ folder (same place as __composer.json__), then downloads necessary libraries described in the JSON and places them in it, then create a __composer.lock__ file.
* You should add __/vendor/__ into __.gitignore__ file, but __composer.lock__ file shouldn't be ignored. Please Google to know why.
* PHP code that would use any of depended libraries, must have this code:  ```<?php require_once 'vendor/autoload.php'; ?>```      

## Run PHP with Command Prompt
* Add the directory that contains __php.exe__ into __Path__ environment parameter.
* Ctrl+R (Run) "CMD", and run this command: __php your_file.php__.

## Run PHP with XAMPP:

* Download XAMPP from [this page](https://www.apachefriends.org/index.html). Install it.
* Copy your PHP files to __htdocs__ folder in XAMPP installation folder.
* Open __xampp-control.exe__
* Start __Apache__ server. If it failed in starting, please check current opening websites in IIS (Internet Information Services) and turn of the ones that use any of the ports used by Apache.
* Use web browser and access __localhost/...__ ([...] is replaced by the directory to your PHP file.)

## My environment:

* Windows 10
* Visual Studio Code 1.41.1
* XAMPP v3.2.4

## Debug with Xdebug on Visual Studio Code (running PHP files on XAMPP's server):

* Download Xdebug binary file from [https://xdebug.org/download](https://xdebug.org/download) (choose a file that matches the PHP version used by XAMPP; make sure your computer has corresponding C++ installed)
* Place that binary in __...\xampp\php\ext__ (xampp is the folder where XAMPP is installed)
* Open __xampp-control.exe__, click __Config__ button, select __php.ini__. Place settings below at the end of the file. You have to change some "dir" parameters value to match your environment. Please note that in this example, I have XAMPP installed in __E:\php\xampp__ directory.

>[XDebug]

>;zend_extension points to the Xdebug binary file you downloaded.

>zend_extension="E:\php\xampp\php\ext\php_xdebug-2.9.2-7.4-vc15-x86_64.dll"

>xdebug.stopOnEntry = true

>xdebug.profiler_enable = off

>xdebug.profiler_enable_trigger = Off

>xdebug.profiler_output_name = cachegrind.out.%t.%p

>xdebug.profiler_output_dir ="E:\php\xampp\tmp"

>xdebug.show_local_vars=0

>xdebug.remote_enable = 1

>xdebug.remote_autostart = 1

>xdebug.remote_handler = "dbgp"

>xdebug.remote_host = "127.0.0.1"

>xdebug.remote_log = "E:\php\xampp\tmp\xdebug.txt"

>xdebug.remote_port = 9000

>xdebug.trace_output_dir = "E:\php\xampp\tmp"

>xdebug.remote_cookie_expire_time = 36000

* On Visual Studio Code, open __Extensions__ (Ctrl+Shift+X), and type "PHP Debug" to search for that extension and install it.
* In order to activate debugger, you have to use Visual Studio Code to open a folder, rather than a file. Please open the folder containing the file you want to debug, then open that file, and create debug breakpoint on it.
* Visual Studio Code needs a __launch.json__ file locating in the opened folder before debugging. You can create one by using __Debug and Run__ (Ctrl+Shift+D) in Visual Studio Code and following its instruction. In this case, just click on __create a launch.json file__ option, then select the environment of "PHP Debug" extensions (which you named upon installing "PHP Debug"), which is "PHP" in my case.  
* Click __Debug -> Start Debugging__ menu.
* Start Apache web server with XAMPP controller.
* Use web browser and browse for __http://localhost/dashboard/phpinfo.php__ to confirm your settings of Xdebug. Just Ctrl+F "Xdebug" appearing in the site.
* Browse the PHP where you place breakpoints. Check if the breakpoint is hit in Visual Studio Code.  

## Debug with Xdebug on Visual Studio Code (running PHP files with Command Prompt)

The method is similar to the case of using XAMPP. You have to paste your files to __ext__ folder of your installed PHP, instead of the __ext__ folder at your XAMPP's place. The __php.ini__ file used in this case, of course, belongs to your installed PHP, not XAMPP. Besides, please change some values in your configuration which would be pasted in __php.ini__ so that it would make sense.
