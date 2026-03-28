<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/.env.php';
require_once __DIR__ . '/includes/dbh.inc.php';

$provider = new League\OAuth2\Client\Provider\Google([
    'clientId'     => GOOGLE_CLIENT_ID,
    'clientSecret' => GOOGLE_CLIENT_SECRET,
    'redirectUri'  => GOOGLE_REDIRECT_URI,
]);

if(!isset($_GET['code'])) {
    header('Location: login.php');
    exit();
}

try {
    $token = $provider->getAccessToken('authorization_code', [
        'code' => $_GET['code']
    ]);

    $user = $provider->getResourceOwner($token);

    $google_id    = $user->getId();
    $google_name  = $user->getName();
    $google_email = $user->getEmail();

    // Check if user already exists in DB
    $sql = "SELECT * FROM learners WHERE usersEmail = ?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $google_email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) == 0) {
        // Register new user
        $sql2 = "INSERT INTO learners (usersFname, usersLname, usersUid, usersEmail, userPwd) VALUES (?, ?, ?, ?, ?)";
        $stmt2 = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt2, $sql2);
        $dummy_pwd = password_hash(bin2hex(random_bytes(16)), PASSWORD_DEFAULT);
        $fname = $google_name;
        $lname = '';
        $uid = 'google_' . $google_id;
        mysqli_stmt_bind_param($stmt2, "sssss", $fname, $lname, $uid, $google_email, $dummy_pwd);
        mysqli_stmt_execute($stmt2);
        mysqli_stmt_close($stmt2);
    }

    // Log the user in
    $row = mysqli_fetch_assoc($result) ?: ['usersUid' => 'google_'.$google_id, 'usersFname' => $google_name, 'usersId' => null];
    
    $_SESSION['userId']   = $row['usersId'];
    $_SESSION['useruid']  = $row['usersUid'];
    $_SESSION['username'] = $row['usersFname'];

    header('Location: indexshcolaship.php');
    exit();

} catch(Exception $e) {
    header('Location: login.php?error=googlefailed');
    exit();
}
?>