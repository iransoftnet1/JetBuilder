# JetBuilder
Suitable for output (vue, react ...)

With one click, all the following steps are performed by this package

---- local ----

1- command build

2- compress file

3- upload host

---- server ----

4- received zip

5- project folder clean 

6- extract


## Install
**Step 1 :**

First put the local file in a place where php can read and run it
[xampp]
Then enter your config in the local/lib/config.php file
Enter the project name, their path, the command to build 

**Step 2 :**

Place the server file in a location on the server where you can run the index.php file from the outside (host where you want to build your project and upload and extract it)
Then change the server-side configurations to server/lib/config.php


> recommended:
> For more security, you can put a php file in public_html like Laravel and requeire the index.php file of the package and put the contents of the package in the root host 


Step 3 :
Installation done By opening the local / index.php file you can see your project.
Open the build button Your project will be built and uploaded to the server

before build (list project config)
<img src="https://raw.githubusercontent.com/iransoftnet1/JetBuilder/main/doc/before.png" alt="before pic">

after build (display the steps in the command box)
<img src="https://raw.githubusercontent.com/iransoftnet1/JetBuilder/main/doc/after.png" alt="before pic">
