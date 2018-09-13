<?php
//
//  Search encyclopedia articles
//  Batik Encyclopedia App's
//
//  Created by Rizal Hilman on 12/09/18.
//  Copyright © 2018 Rizal Hilman. All rights reserved.
//  www.khilman.com
//  www.github.com/drawrs
//  rizal@udacoding.com
//

require 'autoload.php';

$q = isset($_GET['q']) ? $_GET['q'] : "";

$sql = "SELECT * FROM articles WHERE title LIKE '%$q%'";
$query = $conn->query($sql);

$data = null;
while ($article = $query->fetch_assoc()) {
    //$data[] = $article;
    $data[] = $article;
}
if (!empty($data)) {
    $status = true;
} else {
    $status = false;
}
$result = json_encode(['status' => $status, 'data' => $data]);
header('Content-Type: application/json');
echo $result;