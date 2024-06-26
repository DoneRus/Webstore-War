<?php


session_unset();
session_destroy();
echo "
<script>
alert('Je bent uitgelogd.');
location.href='home.php';
</script>
";
?>