<form method="POST">
    <div class="form-group">
        <label>Your email</label>
        <input name="loginUser" class="form-control" placeholder="Email" type="email">
    </div>
    <div class="form-group">
        <a class="float-right" href="#">Forgot?</a>
        <label>Your password</label>
        <input name="passUser" class="form-control" placeholder="******" type="password">
    </div>
    <div class="form-group">
        <div class="checkbox">
            <label> <input type="checkbox">Save password</label>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="POST_LOGIN">Login</button>
    </div>
</form>
<?php
if (isset($_POST['POST_LOGIN'])) {

    try {

        $userLogin = $_POST['loginUser'];
        $userPass = $_POST['passUser'];
        $result_connect = false;
        $user = 'root';
        $password = '';
        $server = 'localhost';
        $link = mysqli_connect("localhost", "root", "", "project-db");
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM users";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                         if($row['email'] == $userLogin && $row['hashpass'] == $userPass){

                             $result_connect = true;
                         }
                }
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        }
        if ($result_connect == true){

            header("Location: /sandbox/public/pages/index");
            exit();
        }
        else{
            header("Location: /sandbox/public/pages/error");
            exit();
        }
    }
    catch (Exception $e) {
        print 'Connection failed: ' . $e->getMessage();
    }
    mysqli_close($link);

}
