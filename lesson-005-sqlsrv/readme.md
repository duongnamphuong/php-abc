### Before playing your code, you have to install PHP SQL Server driver.

* To download the driver, visit [https://github.com/microsoft/msphpsql/releases](https://github.com/microsoft/msphpsql/releases) and follow its instruction. In my case of using PHP 7.4.1 and Windows, I was instructed to download 2 libraries __SQLSRV__ and __PDO_SQLSRV__ from [these](https://pecl.php.net/package/sqlsrv) [pages](https://pecl.php.net/package/pdo_sqlsrv)
* Extract and paste those 2 DLLs in __ext__ folder inside your PHP directory.
* Add configurations below into __php.ini__ (use the exact name of those pasted DLL files):

>extension="php_sqlsrv.dll"

>extension="php_pdo_sqlsrv.dll"