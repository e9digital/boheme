<?
  if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
    $to       = 'Boheme Contact Form <info@bohemefilms.com>';
    $subject  = "boheme contact form: from " . substr($_POST['email'], 0, 30);
    
    $body     = "";
    $body    .= "First Name: "  . $_POST['first-name']  . "\r\n";
    $body    .= "Last Name: "  . $_POST['last-name']  . "\r\n";
    $body    .= "Email: " . $_POST['email'] . "\r\n";
    $body    .= "Should Contact: " . $_POST['contact-agreement'] . "\r\n";
    $body    .= "Primary Reason: " . $_POST['primary-reason'] . "\r\n";
    $body    .= "Other Reason: " . $_POST['other-reason'] . "\r\n";
    $body    .= "Message: " . $_POST['message'] . "\r\n";

    $headers  = "";
    $headers .= "Mime-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/plain; CHARSET=iso-8859-1" . "\r\n";
    $headers .= "From: " . $to . "\r\n";
    $headers .= "Reply-To: " . $_POST['email'] . "\r\n";

    if (mail($to, $subject, $body, $headers)) {
      header("Status: 200 OK");
    } else {
      header("Status: 500 Internal Server Error");
    }
  } else {
    header("Status: 404 Not Found");
  }
?>
