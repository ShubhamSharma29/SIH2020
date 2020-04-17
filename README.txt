!!IMPORTANT!!
------------------------------------------------------------------------------------------------------------------
Get FFMPEG installed/extracted into the root folder of the project. In my case the path of FFMPEG executable is:

"C://xampp//htdocs//SIH//FFMpeg//bin//ffmpeg"

Verify this with your package and replace the line wherever it occurs in the file vd.php. 
(No insertion is possible without this)

Open mongodb(mongod.exe) and mongo shell(mongo.exe) :
You must have configured companydb and users schemas with corresponding empColl and admins collections respectively.
If not copy/paste the following lines into your mongo shell:
>use companydb
>db.createCollection("empColl")

>use users;
>db.createCollection("admins")

How to use the site:
-----------------------------------------------------------------------------------------------------------------
1.You must have at least mongod.exe open at all times in order for the project to run efficiently.
2.Some sidebar links may not function properly as href might not have been specified.
3. Do not destroy any session variables in the project.
4. If u manuaaly delete a place from Projects..please ensure that its records are deleted from mongodb use:
	>use companydb
	>db.empColl.deleteMany({})
5. To view if your data has been successfully inserted/updated in the db hit:
	>use companydb
	>db.empColl.find({})
6.Use sessd.php to view active session variables

7. Insertion: super-dm.php>>(sidebar)Scenes/Projects>>Add Place
8. Updation/Deletion: super-dm.php>>(sidebar)Scenes/Projects>>Modify place
9. Create admins: super-dm.php>>(sidebar)User Management>>Add admin
10.Update admins: super-dm.php>>(sidebar)User Management>>Modify/Delete admins