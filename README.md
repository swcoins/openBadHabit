# openBadHabit

--- What is this --- 
An open structure that will allow easy auto-population of data from a MYSQL database of a HTML input text field using JSON and PHP.

--- Layout of this GIT ---

/index.html         # sample HTML file that shows a sample form and how JS scripts are added
/js/*               # folder with badHabit.js that contains JS to send and get JSON from PHP file 
/php/*              # folder with badHabitHelper.php file that cointains a php file which shows how to get and send                        data to badHabit.js.
/php/config.db.php  # a PHP file added for your convience that will speed up connecting to a MYSQL database. 

--- Get Started --- 
  What is included here is a proof of concept structure. The main compontents to get you up and having your forms automatically filling out are inside the js/badHabit.js and php.badHabitHelper.php files.  However, before you try to implement this into your web app you may want to play with this system at it's basic level. That is what we have created here... a self contained working showcase that only features openBadHabit. 
  
  Once you get comfortable with what is going on; you can simply with a few edits to suit your needs copy the js/badHabit.js contents into your relvent js files and the php/badHabitHelper.php contents into your relevent PHP file. Then all you will need to do is edit your HTML form with the correct IDs and all should conntect up and work.
  
  To play around with this GIT.
  
    1) Edit the /php/config.db.php file to suit your database needs
		2) Edit the ID and Name below to suit your needs. 
		3) in js/badHabit.js be sure the ID matches the name ID below.
		4) Edit php/badHabitHelper.php to suit your database table name, column name, info
		


