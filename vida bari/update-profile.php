<?php include 'Configurations.php';
use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseACL;
use Parse\ParsePush;
use Parse\ParseUser;
use Parse\ParseInstallation;
use Parse\ParseException;
use Parse\ParseAnalytics;
use Parse\ParseFile;
use Parse\ParseCloud;
use Parse\ParseGeoPoint;
use Parse\ParseClient;
use Parse\ParseSessionStorage;
// session_start();

/*--- VARIABLES ---*/
// currentUser
$currentUser = ParseUser::getCurrentUser();
$cuObjectID = $currentUser->getObjectId();

$username = $_GET['username'];
$fullName = $_GET['fullName'];
$email = $_GET['email'];
$weight = $_GET['weight'];
$height = $_GET['height'];
$date = $_GET['date'];
$bio = $_GET['bio'];
$fileURL = $_GET['fileURL'];

// prepare data
$currentUser->set($USER_USERNAME, $username);
$currentUser->set($USER_FULLNAME, $fullName);
$currentUser->set($USER_EMAIL, $email);
$currentUser->set($USER_BIO, $bio);
$currentUser->set($USER_WEIGHT, $weight);
$currentUser->set($USER_HEIGHT, $height);

// avatar
$file = ParseFile::createFromFile($fileURL, "avatar.jpg");
$file->save();
$currentUser->set($USER_AVATAR, $file);
$currentUser->save();

// save...
try { $currentUser->save();
  echo 'Perfil atualizado com sucesso!';
// error 
} catch (ParseException $ex) { echo $ex->getMessage(); }
?>