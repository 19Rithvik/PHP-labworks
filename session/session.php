<?php 
    session_start();
    $_SESSION['name'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['date'] = date('Y-m-d H:i:s');
    $time = date('Y-m-d H:i:s');
    setcookie('time', $time, time() + 3600, '/');
    if(isset($_COOKIE['PHPSESSID'])){
        echo 'Session ID: ' . $_COOKIE['PHPSESSID'] . '<br>';
    }
    
    echo 'Name: ' . $_SESSION['name'] . '<br>';
    echo 'password: ' . $_SESSION['password'] . '<br>';
    // check whether the session is new 
   
        session_status() == PHP_SESSION_ACTIVE ? $new = 'active' : $new = 'not active';
        echo 'Session is ' . $new . '<br>';

    echo 'Session time created: ' . $_SESSION['date'] . '<br>';
    // echo 'Session last accessed: ' . $_COOKIE['time'] . '<br>';
    if(isset($_COOKIE['time'])){
        echo 'Session last accessed: ' . $_COOKIE['time'] . '<br>';
    } else {
        echo 'Session last accessed: ' . $_SESSION['date'] . '<br>';
    }
    echo '<a href="sample.php">Go to sample.php</a><br>';
    echo '<a href="destroy.php">Destroy Session</a><br>';
    echo '<a href="index.php">Go to index.php</a><br>';
    //maximum inactive interval print
    echo 'Maximum inactive interval: ' . ini_get('session.gc_maxlifetime') . ' seconds<br>';
    $_COOKIE['time'] = date('Y-m-d H:i:s');

?>

