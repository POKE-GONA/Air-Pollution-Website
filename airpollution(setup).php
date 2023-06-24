<?php 

$connect=mysqli_connect('localhost','root','','airpollutiondb');

$drop=mysqli_query($connect,"Drop table feedback");
$drop=mysqli_query($connect,"Drop table Store_History");
$drop=mysqli_query($connect,"Drop table FAQ");
$drop=mysqli_query($connect,"Drop table Admin");
$drop=mysqli_query($connect,"Drop table user");

//------------------------------------------------------------------------------------------------------

$create=mysqli_query($connect,"Create table user
 			(
 			UserId int Auto_Increment not null Primary key,
 			FullName varchar(30),
 			Email varchar(30),
 			DateOfBirth date,
 			PostalAddress text,
 			Postcode int,
 			UserName varchar(30),
 			Password text,
 			UserImage text
 			)");

if ($create) 
{
	echo "<p>User Table Save</p>";
}
else
{
	echo mysqli_error($connect);
}

$insert=mysqli_query($connect,"Insert into user 
	values(1,'Thet Su Chaw','thet45@gmail.com','1999/10/31','SouthOkkalapa','4567','Thet Su','e10adc3949ba59abbe56e057f20f883e','UserImage/6.jpg')");
$insert=mysqli_query($connect,"Insert into user 
	values(2,'Shwe Su Yee','shwesu34@gmail.com','2000/9/12','NorthOkkalapa','1234','Shwe Su','e10adc3949ba59abbe56e057f20f883e','UserImage/7.jpg')");
$insert=mysqli_query($connect,"Insert into user 
	values(3,'Kyaw Zin Soe','zinkyaw76@gmail.com','2001/12/24','Lanmadaw','9874','Kyaw Zin','e10adc3949ba59abbe56e057f20f883e','UserImage/8.jpg')");

if ($insert) 
{
	echo "<p>User Table Insert</p>";
}
else
{
	echo mysqli_error($connect);
}

//------------------------------------------------------------------------------------------------------

$create=mysqli_query($connect,"Create table Admin
 			(
 			StaffId int Auto_Increment not null Primary key,
 			StaffName varchar(30),
 			Email varchar(30),
 			Password text,
 			StaffImage text
 			)");

if ($create) 
{
	echo "<p>Admin Table Save</p>";
}
else
{
	echo mysqli_error($connect);
}


$insert=mysqli_query($connect,"Insert into Admin values(1,'Aye Chan Moe','chan45@gmail.com','e10adc3949ba59abbe56e057f20f883e','StaffImage/6.jpg')");
$insert=mysqli_query($connect,"Insert into Admin values(2,'Yu Mya','mya55@gmail.com','e10adc3949ba59abbe56e057f20f883e','StaffImage/7.jpg')");
$insert=mysqli_query($connect,"Insert into Admin values(3,'Aye Chan Moe','chan45@gmail.com','e10adc3949ba59abbe56e057f20f883e','StaffImage/8.jpg')");

if ($insert) 
{
	echo "<p>Admin Table Insert</p>";
}
else
{
	echo mysqli_error($connect);
}

//------------------------------------------------------------------------------------------------------

$create=mysqli_query($connect,"Create table FAQ
 			(
 			QuestionId int Auto_Increment not null Primary key,
 			UserId int,
 			Foreign key (UserId) references User(UserId),
 			StaffId int,
 			Foreign key (StaffId) references Admin(StaffId),
 			Question text,
 			QuestionDate Date,
 			Answer varchar(255)
 			)");

if ($create) 
{
	echo "<p>FAQ Table Save</p>";
}
else
{
	echo mysqli_error($connect);
}

$insert=mysqli_query($connect,"Insert into FAQ values (1,'1','1','What causes air pollution?','2019,9,22','In many countries, power generation is a leading source of air pollution. Coal-burning power plants are a major contributor, while diesel generators are a growing concern in off-grid areas. Industrial processes and solvent use, in the chemical and mining industries, also pollute the air.')");

$insert=mysqli_query($connect,"Insert into FAQ values (2,'2','2','What are the effects of air pollution on human health?','2020,8,12',' High air pollution levels can cause immediate health problems including:Aggravated cardiovascular and respiratory illness/Added stress to heart and lungs, which must work harder to supply the body with oxygen/Damaged cells in the respiratory system.')");

$insert=mysqli_query($connect,"Insert into FAQ values (3,'3','3','What Can I Do to Help Reduce Air Pollution?','2018,10,28','Carpool, use public transportation, bike, or walk whenever possible.Follow gasoline refueling instructions for efficient vapor recovery, being careful not to spill fuel and always tightening your gas cap securely.')");

$insert=mysqli_query($connect,"Insert into FAQ values (4,'1','1','What are the harmful effects of air pollution?','2017,7,15','Urban smog: These harmful gases and tiny particles can irritate our eyes, nose, and throat in the short-term. In the long-term, they can worsen heart and lung problems.Urban smog can be a very serious hazard in densely populated areas.Here are a few ways that we can protect ourselves and other species from the harmful effects of air pollution.')");

$insert=mysqli_query($connect,"Insert into FAQ values (5,'3','3','How can we save earth from air pollution?','2016,6,10','Plant a Garden: Plant a garden that is going to give the air the nutrients that it needs to be cleaner. There are so many plants out there that will eat up the junk in the atmosphere.So,we can grow many plants every where.')");

if ($insert) 
{
	echo "<p>FAQ Table Insert</p>";
}
else
{
	echo mysqli_error($connect);
}

//------------------------------------------------------------------------------------------------------

$create=mysqli_query($connect,"Create table Store_History
(
	HistoryId int Auto_Increment not null primary key,
	UserId int,
	Foreign key (UserId) references User(UserId),
	HistoryDate date,
	Pagename text
)");

if ($create) 
{
	echo "<p>Store_History Table Save</p>";
}
else
{
	echo mysqli_error($connect);
}

$insert=mysqli_query($connect,"Insert into Store_History values (1,'1','2018,10,29','User Register');");
$insert=mysqli_query($connect,"Insert into Store_History values (2,'2','2019,9,23','User Login');");
$insert=mysqli_query($connect,"Insert into Store_History values (3,'3','2020,8,13','User Question');");

if ($insert) 
{
	echo "<p>Store_History Table Insert</p>";
}
else
{
	echo mysqli_error($connect);
}

//-----------------------------------------------------------------------------------------------------

$create=mysqli_query($connect,"Create table feedback
	 (
	FeedbackID int not null  Auto_Increment primary key,
	UserId int,
	Foreign key (UserId) references User(UserId),
	FeedbackDate date,
	Comment varchar(255)
	 );");

if($create) 
{
	echo "<p>Products table Created</p>";
}
else
{
	echo mysqli_error($connect);
}

$insert=mysqli_query($connect,"Insert into feedback values ('1','1','2020-1-15','It is useful to view this site')");

if($insert) 
{
	echo "<p>Products table Inserted</p>";
}
else
{
	echo mysqli_error($connect);
}

//-----------------------------------------------------------------------------------------------------
?>

<?php 
$dropcountry="Drop table Country";
$rundropcountry=mysqli_query($connect,$dropcountry);
if($rundropcountry)
{ 
	echo "<p>Country Table Drop Successful</p>";
}
$run="CREATE table Country
(
	CountryID int Auto_Increment not null Primary Key,
	FeedbackID int,
	Foreign key (FeedbackID) references feedback(FeedbackID),
	CountryName varchar(30),
	PollutionRate int,
	Year int,
	Description varchar(255),
	Image1 varchar(255),
	Image2 varchar(255),
	Image3 varchar(255)
)";

$create=mysqli_query($connect,$run);

if($create) 
{
	echo "<p>Country table Created</p>";
}
else
{
	echo mysqli_error($connect);
}

$insert=mysqli_query($connect,"Insert into Country values (1,'1','THAILAND','95','2020','The air in Thailand has been heavily polluted by the Bangkok','images/ThailandFlag.jpg','images/Thailand2.jpg','images/Thailand3.jpg')");
$insert=mysqli_query($connect,"Insert into Country values (2,'1','SOUTH KOREA','85','2019','The air in SouthKorea has been heavily polluted by the Seoul','images/SouthKorea.jpg','images/Korea.jpg','images/Korea3.jpg')");
$insert=mysqli_query($connect,"Insert into Country values (3,'1','FRANCE','80','2019','The air in France has been heavily polluted by the Paris','images/FranceFlag.jpg','images/France2.jpg','images/France3.jpg')");

if($insert) 
{
	echo "<p>Country table Inserted</p>";
}
else
{
	echo mysqli_error($connect);
}

//-----------------------------------------------------------------------------------------------------
?>