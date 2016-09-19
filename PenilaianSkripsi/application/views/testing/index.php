<?php foreach ($test as $test_item): ?>

        <div class="main">
                <?php echo $test_item['semester']; ?>
        </div>
        <p><a href="<?php echo site_url('testing/'.$test_item['tahun']); ?>">View article</a></p>

<?php endforeach; ?>

<?php
echo $test_item['semester'];
?>