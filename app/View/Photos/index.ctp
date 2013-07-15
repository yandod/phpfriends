<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yandod
 * Date: 2013/07/15
 * Time: 9:12
 * To change this template use File | Settings | File Templates.
 */
foreach ($data as $row):?>
<p class="photobox">
    <?php echo $this->Html->image($row['Photo']['url'], array('class' => 'photo'));?>
    <p class="description"><?php echo h($row['Photo']['text']); ?></p>
</p>
<?php endforeach; ?>
