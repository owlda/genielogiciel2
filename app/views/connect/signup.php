<?php require APPROOT . '/views/_layouts/headerApp.php' ?>
<body>
<h3 id="allFilms">Fill the necessary information:</h3>
                     <form action="/sandbox/public/pages/index" method="POST" style="width: 60%; margin-left: 20%">
                            <div class="form-group">
                                <label>Your name</label>
                                <input name="nameModal" class="form-control" placeholder="Name" type="text" id="name-modal" >
                            </div>
                            <div class="form-group">
                                <label>Your surname</label>
                                <input name="surnameModal" class="form-control" placeholder="Surname" type="text" id="surname-modal">
                            </div>
                            <div class="form-group">
                                <label>Your email</label>
                                <input name="emailModal" class="form-control" placeholder="Email" type="email" id="email-modal">
                            </div>
                            <div class="form-group">
                                <label>Your password</label>
                                <input name="passModal" class="form-control" placeholder="******" type="password" id="pass-modal">
                            </div>
                            <div class="form-group">
                                <label>Repeat your password</label>
                                <input name="pass2Modal" class="form-control" placeholder="******" type="password" id="pass2-modal">
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label> <input type="checkbox"> Save password </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="POST_USER_DB" class="btn btn-primary btn-block">Signup</button>
                            </div>
                        </form>
</body>
<?php
if (isset($_POST['POST_USER_DB'])) {
    require APPROOT . '/models/User.php';
    try {
        $user = 'root';
        $password = '';
        $server ='localhost';

        // Construct model of the user
        $site_user = new User($_POST['emailModal'], $_POST['nameModal'], $_POST['surnameModal'], $_POST['passModal']);


        $conn = new PDO("mysql:host=$server;dbname=project-db", $user, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


        // Pre-statement for query
        $stmt= $conn->prepare("INSERT INTO users (uid, email, username, surname, hashpass) VALUES (:uid,:email,:username,:surname,:hashpass)");
        $stmt->execute(array('uid' => hexdec(uniqid()), 'email' => $site_user->getEmail(), 'username' => $site_user ->getName(), 'surname' => $site_user->getSurname(), 'hashpass' => $site_user ->getHashpass()));

    } catch (PDOException $e) {
        print 'Connection failed: ' . $e->getMessage();
    }

}
