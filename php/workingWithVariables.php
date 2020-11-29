<?php
    $var1 = $_POST['var'];
    $var2 = $var1." ...";
    $new_value="new";

?>
<script>
    var1 = '<?php echo $var2; ?>';
    alert(var1);

</script>
