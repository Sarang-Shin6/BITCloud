To install Sarang's BIT Project

Note: You must have XAMPP installed to run this project. Found at https://www.apachefriends.org/download.html.

1. Start xampp and start the Apache and MYSQL modules.
2. Press the admin button in XAMPP for MYSQL to bring up PhpMyAdmin, the MYSQL Editor, in your browser
3. Once loaded, press the SQL Tab
4. Open the bitdbScript.txt file from the project folder, copy the content and 
	paste it into the provided textbox on PhpMyAdmin.
5. Press the 'Go' button. This will create the project database.
6. To access the database refresh the database list to the left of the window by clicking on the 
	green circular arrow and select the 'bitdb' link in the database list underneath it.
7. Go back to the project directory where the bitdbScript.txt file was and 
	move the 'BITSite' folder into the htdocs directory in your XAMPP installation folder.
	(this will vary depending on the location you have installed your XAMPP.
	Most common location will be on the C: Drive so the htdocs directory will be 
	located on C:\xampp\htdocs.)
8. Now you will have access to the project website through localhost. To access the website,
	start your browser and go to 'localhost/bitSite'. You will be taken to the homepage.
9. To start the Client Server Application you will need Visual Studio 2017. If you do not, 
	You can start the application by running 'BITClientServer\BITClientServer\bin\Debug\BITClientServer'.
	Otherwise you can start the BITClientServer.sln file in the 'BITClientServer' folder to open it up in VS2017.

Login Test Data: All passwords for the Coordinator, Contractor and Client logon is 'test' while the
		usernames used are their respective emails which you can find in the database.

Examples: 
	Contractor-
		Username : Josh.Moss@gmail.com
		Password : test
	Contractor-
		Username : Maddie.Bourne@gmail.com
		Password : test	
	Client-
		Username : Eva.Douglas@nhealth.com
		Password : test
	Client-
		Username : Stella.Kroemer@toony.com
		Password : test
	Coordinator-
		Username : Ben.Ireland@gmail.com
		Password : test
	Coordinator-
		Username : Audrey.Curmi@gmail.com
		Password : test