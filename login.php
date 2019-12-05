 <?php 
session_start();
require_once( 'Facebook/autoload.php' );
$fb = new Facebook\Facebook([
  'app_id' => '464528480869531',
  'app_secret' => 'd5cba87e4c7afb855027146e00ea1d87',
  'default_graph_version' => 'v2.9',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('quyetcuoiki.000webhostapp.com/demo/fb-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
?>