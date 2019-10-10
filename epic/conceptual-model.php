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
	<li>dogName</li>
	<li>dogBreed</li>
	<li>dogColor</li>
	<li>dogSize</li>
	<li>dogAge</li>
	<li>dogImage</li>
	<li>dogExtraComments</li>
	<li>ownerID (foreign key)</li>
</ul>
<h3>Owner</h3>
<ul>
	<li>ownerID (primary key)</li>
	<li>ownerName</li>
	<li>ownerHash (password)</li>
	<li>ownerAddress</li>
	<li>ownerPhoneNumber</li>
	<li>ownerEmail</li>
</ul>
<h3>Relationships</h3>
<ul>
	<li>One dog can have only one owner (1 to 1) </li>
	<li>One owner can have one or many dogs (1 to n) </li>
</ul>
<h1 align="center">Entity Relationship Diagram</h1>
<div align="center">
	<img src="images/ERD-DataDesign-Phase1.png" alt="ERD" style="width:1200px;height:550px;">
</div>
<div>
	<button><a href="index.php">Go back</a></button>
</div>
</body>
</html>
