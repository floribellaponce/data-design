<!DOCTYPE html>
<html lang="en">
<head>
	<title>ERD-DataDesign-Phase1</title>
	<meta charset="utf-8"/>
</head>
<body>
<h1 align="center">Conceptual Model</h1>
<h2>Entities & Attributes</h2>
<h3>Dog</h3>
<ul>
	<li>dogID (primary key)</li>
	<li>dogUserID (foreign key)</li>
	<li>dogName</li>
	<li>dogBreed</li>
	<li>dogColor</li>
	<li>dogSize</li>
	<li>dogAge</li>
	<li>dogImage</li>
	<li>dogExtraComments</li>
</ul>
<h3>User</h3>
<ul>
	<li>userID (primary key)</li>
	<li>userName</li>
	<li>userHash (password)</li>
	<li>userAddress</li>
	<li>userPhoneNumber</li>
	<li>userEmail</li>
</ul>
<h3>Comment</h3>
<ul>
	<li>commentID (primary key) </li>
	<li>commentUserID (foreign key)</li>
	<li>commentDogID (foreign key)</li>
	<li>commentContent</li>
</ul>
<h3>Relationships</h3>
<ul>
	<li>One user to one or many dogs (1 to n)</li>
	<li>One user can leave none or many comments(1 to n)</li>
	<li>One dog can have none or many comments(1 to n)</li>
</ul>
<h1 align="center">Entity Relationship Diagram</h1>
<div align="center">
	<img src="images/ERD-DataDesign-Phase2%20(2).png" alt="ERD" style="width:1200px;height:550px;">
</div>
<div>
	<button><a href="index.php">Go back</a></button>
</div>
</body>
</html>
