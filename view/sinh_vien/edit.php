<form action="?action=update&controller=sinh_vien" method="post">
    <input type="hidden" name="ma" value="<?php echo $each['ma']?>">
    Ten
    <input type="text" name="ten" value="<?php echo $each['ten']?>">
<br> 
<br> 
    lop
    <select name="ma_lop">
        <?php foreach ($lops as $lop): ?>
            <option value=" <?php echo $lop['ma']?>" <?php if($lop['ma'] === $each['ma_lop']) echo "selected"?>>
                <?php echo $lop['ten']?>
            </option>
            <?php endforeach ?>
    </select>
    <br>
    <button>Sua</button>
</form>