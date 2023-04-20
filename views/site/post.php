<h1>Список записей</h1>
<ol>
    <?php
    foreach ($record as $post) {
        echo '<li>' . $post->hello . '</li>';
    }
    ?>
</ol>
