<?php
session_start();
session_unset();
session_destroy();

echo('<script language="javascript">alert("Đăng xuất thành công!"); window.location="./../../index.php";</script>');
?>