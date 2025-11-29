<?php
$msg = "";
if(isset($_POST["check"])){
    $p = $_POST["pass"];
    if(strlen($p) < 8) $msg = " ضعيفة: أقل من 8 حروف";
    elseif(!preg_match('/[0-9]/', $p)) $msg = " ضعيفة: لا تحتوي رقم";
    elseif(!preg_match('/[A-Z]/', $p)) $msg = " ضعيفة: لا تحتوي حرف كبير";
    else $msg = "✔ قوية";
}
?>
<!DOCTYPE html>
<html>
<body>
<h2>فحص قوة كلمة المرور</h2>

<form method="post">
    <input type="password" name="pass" placeholder="أدخل كلمة المرور">
    <button name="check">فحص</button>
</form>

<p><?= $msg ?></p>
</body>
</html>
