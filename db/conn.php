<?php
//
//  Database Connection, change with your configuration
//  Batik Encyclopedia App's
//
//  Created by Rizal Hilman on 12/09/18.
//  Copyright © 2018 Rizal Hilman. All rights reserved.
//  www.khilman.com
//  www.github.com/drawrs
//  rizal@udacoding.com
//
$server = "localhost";
$username = "root";
$password = "root";
$database = "db_encyclopedia_batik";

$conn = new Mysqli($server, $username, $password, $database);