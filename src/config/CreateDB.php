<?php 
require_once("Config.php");

// Create connection
$mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD);
// Check connection
if ($mysqli->connect_error) {
   echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$sql = array( 
	"CREATE DATABASE IF NOT EXISTS " . DB,

	"use " . DB,
	
	"DROP TABLE IF EXISTS STOCKMARKET, SHARE, EMPLOYEE, STOCK, COMPANY;",

	"CREATE TABLE Company(".
	"CompanyName varchar(50), ".
	"Address varchar(60) UNIQUE, ".
	"EmployeeSize int,".
	"CEO varchar(40), ".
	"Founded DATETIME, ".
	"IndustryType varchar(40), ".
	"PRIMARY KEY(CompanyName)".
	");",

	"ALTER TABLE Company ENGINE = InnoDB;",

	"CREATE TABLE Stock(".
	"CompanyName varchar(50),  ".
	"Price int NOT NULL CHECK ( Price >= 1 ), ".
	"Symbol varchar(10), ".
	"PRIMARY KEY(Symbol), ".
	"FOREIGN KEY Stock(CompanyName) REFERENCES ".
	"Company(CompanyName) ON DELETE CASCADE ON UPDATE CASCADE".
	");",

	"ALTER TABLE Stock ENGINE = InnoDB;",

	"CREATE TABLE Employee (".
	"EmployeeID int UNSIGNED AUTO_INCREMENT,".
	"Name varchar(60),".
	"CompanyName varchar(50),".
	"Address varchar(60) NOT NULL,".
	"PhoneNumber varchar(12),".
	"PRIMARY KEY(EmployeeID, CompanyName),".
	"FOREIGN KEY Employee(CompanyName) REFERENCES Company(CompanyName) ON DELETE CASCADE ON UPDATE CASCADE".
	");",

	"ALTER TABLE Employee ENGINE = InnoDB;",

	"CREATE TABLE Share(".
	"StockName varchar(50), ".
	"Quantity int NOT NULL DEFAULT 0, ".
	"OwnerName varchar(50), ".
	"PRIMARY KEY(StockName, OwnerName),".
	"FOREIGN KEY(StockName) REFERENCES Stock(Symbol) ON DELETE CASCADE ON UPDATE CASCADE".
	");",

	"ALTER TABLE Share ENGINE = InnoDB;",

	"CREATE TABLE StockMarket(".
	"Name varchar(50),".
	"CurrencyType varchar(20) UNIQUE,".
	"Founded DATETIME,".
	"Symbol varchar(10),".
	"PRIMARY KEY(Name)".
	");",

	"ALTER TABLE StockMarket ENGINE = InnoDB;",
);

foreach ($sql as $stmt){
	if ($mysqli->query($stmt) !== TRUE) {
		echo "Error: " . $mysqli->error;
	}	
}

$mysqli->close();






