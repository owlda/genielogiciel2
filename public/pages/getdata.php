<?php
try{
    // connect to mongodb
    $m = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    echo "Connection to database successfully";

}
catch (Exception $exception){
    print 'Something wrong..';
}

?>
<!DOCTYPE html>
<html lang="en">
<body>
</body>
</html>