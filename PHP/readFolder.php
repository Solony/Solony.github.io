var files = <?php
    $all_base_images = scandir('../production/A/base-image');
    echo json_encode($all_base_images);
?>;
