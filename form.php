<?

$name1 = $_POST['user_name1'];
$name = $_POST['user_name'];
$number = $_POST['user_number'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "5147205315:AAEExf6aERYrHixVZvVnUH_wn3kwvW2Q5MU";
$chat_id = '-639495495';

$arr = array(
    
    'Имя пользователя1:' => $name1,
    'Имя пользователя:' => $name,
    'Введите ваше лет:' => $number,
    'Телефон:'          => $phone,
    'Email-:'            => $email
);

foreach ($arr as $key => $value) {
    $text .= "<b>" . $key . "</b>" . $value . "%0A";
  };
  
  $testForm = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}", "r");
  
  if($testForm){
      header('Location: test.html');
  }
  
  else {
      echo "ERROR";
  }
  
  

?>