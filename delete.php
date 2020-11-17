<?php

require_once "_inc/config.php";
$item = $database->get("ithems", "text", [
    "id" => $_GET['id']
]);

// vypis ithem podla'id'
//echo '<pre>';
//print_r($item);
//echo '</pre>';

include_once "shared/header.php";
?>


<div class="page-header">
    <h1>VERY MUCH TODO DELETE</h1>
    <hr>
</div>


<div class="row">
    <form id="delete-form" action="_inc/delete-item.php" class="col-sm-6" method="post">
        <p class="form-group ">
            <textarea disabled name="message" id="text" cols="30" rows="1" class="form-control"><?php echo $item ?></textarea>
        </p>
        <p class="form-group ">
            <input name="id" type="hidden" value="<?php echo $_GET['id'] ?>">
            <button type="submit" class=" btn-sm btn-danger">Delete ithems</button>
            <span class="controls"><a href="<?php echo $site_url?>"class="back-link ">back</a></span>
        </p>
    </form>
</div>


<?php include_once "shared/foother.php" ?>