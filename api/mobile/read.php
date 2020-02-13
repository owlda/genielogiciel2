<?php
$conn = mysqli_connect("localhost","root", "", "dbmobile");
$records = mysqli_query($conn,"select * from tbl_mobile_travels" );
$data = array();
while($row = mysqli_fetch_assoc($records))
{
    $data[] = $row;
}
echo json_encode($data);

mysqli_close($conn);