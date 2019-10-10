<!DOCTYPE html>
<html>
<head>
	<title>ERD-DataDesign-Phase1</title>
	<meta charset="utf-8"/>
</head>
<body>
<div align="center">
	<header><strong>Conceptual Model</strong></header>
</div>
<header><strong>Entities & Attributes</strong></header>
<p>
<div>
	<header><strong>Dog</strong></header>
	<ul>
		<li>dogID</li>
		<li>dogName</li>
		<li>dogBreed</li>
		<li>dogColor</li>
		<li>dogSize</li>
		<li>dogAge</li>
		<li>dogImage</li>
		<li>dogExtraComments</li>
	</ul>
</div>
<div>
	<header><strong>Owner</strong></header>
	<ul>
		<li>ownerID</li>
		<li>ownerName</li>
		<li>ownerAddress</li>
		<li>ownerPhoneNumber</li>
		<li>ownerEmail</li>
	</ul>
</div>
<div>
	<header><strong>Relationships</strong></header>
	<ul>
		<li>One dog can have only one owner (1 to 1) </li>
		<li>One owner can have one or many dogs (1 to n) </li>
	</ul>
</div>
</p>
<div align="center">
	<header><strong>Entity Realtionship Diagram</strong></header>
</div>
<div align="center">
	<img src="images/ERD-DataDesign-Phase1.png" alt="ERD" style="width:1200px;height:550px";>
</div>
<div>
	<button><a href="index.php">Go back</a></button>
</div>
</body>
</html>
