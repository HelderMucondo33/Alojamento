<?php 
session_start();
session_unset();
session_destroy();
echo "<script>alert('logout feito com sucesso'); document.location='../form.php'</script>";



 ?>