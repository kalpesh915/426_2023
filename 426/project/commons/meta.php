<?php
    $metaResult = $client->getMeta();

    while($metaRow = $metaResult->fetch_assoc()){
        $description = $metaRow["description"];
        $keywords = $metaRow["keywords"];
    }
?>
<meta content="<?php echo $description; ?>" name="description">
<meta content="<?php echo $keywords; ?>" name="keywords">
