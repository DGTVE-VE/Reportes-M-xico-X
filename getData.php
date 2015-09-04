<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

header('Content-Type: text/html; charset=utf-8');
require_once 'include_dao.php';
$_SESSION['config'] = parse_ini_file("config.ini", true);
$querySum = DAOFactory::getStudentCourseenrollmentDAO();
$result = $querySum->querySumStudent();

// This is just an example of reading server side data and sending it to the client.
// It reads a json formatted text file and outputs it.

//$string = file_get_contents("sampleData.json");
//echo $string;

// Instead you can query your database and parse into JSON etc etc