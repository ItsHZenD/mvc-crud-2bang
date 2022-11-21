<form action="?action=store&controller=<?php echo $controller ?>" method="post">
    Ten
    <input type="text" name="ten" >
    <br> 
    lop
    <select name="ma_lop">
        <?php foreach ($lops as $lop): ?>
            <option value=" <?php echo $lop['ma']?>">
                <?php echo $lop['ten']?>
            </option>
            <?php endforeach ?>
    </select>
    <br>
    <button>Them</button>
</form>