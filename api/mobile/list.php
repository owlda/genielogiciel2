<?php
$conn = mysqli_connect("localhost","root", "", "northernstartravelv2");
$records = mysqli_query($conn,"SELECT * FROM circuit" );
$data = array();
while($row = mysqli_fetch_assoc($records))
{
    $data[] = $row;
}
echo json_encode($data);

mysqli_close($conn);