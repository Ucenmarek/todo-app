
<?php include "shared/header.php" ?>
<div class="page-header">
    <h1>VERY MUCH TODO LIST</h1>
    <hr>
</div>

<?php
$data = $database -> select('ithems','text');
//echo '<pre>';
//print_r($database->info());
//echo '</pre>';
//echo '<pre>';
//print_r( $data );
//echo '</pre>';
// ?>
<div class="row">
    <ul class="list-group col-sm-6">

        <?php
                foreach ($data as $item) {
                    echo '<li class="list-group-item">'. $item. '</li>';
                }


        ?>
<!--        <li class="list-group-item">toto je  natvrdo napisany zoznam</li>-->
<!--        <li class="list-group-item">a toto je tiez nieco podobne</li>-->
    </ul>

    <form id="add-form" action="_inc/add-new.php" class="col-sm-6" method="post">
        <p class="form-group ">
            <textarea name="message" id="text" cols="30" rows="3" placeholder="tu nieco napis" class="form-control" ></textarea>
        </p>
       <p class="form-group ">

             <button type="submit" class=" btn-sm btn-danger">Ad new thing</button>
        </p> 
    </form>
</div>


<?php include "shared/foother.php" ?>



