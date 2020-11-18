
<?php include_once "shared/header.php" ?>
<div class="page-header">
    <h1>VERY MUCH TODO LIST</h1>
    <hr>
</div>

<?php
$data = $database -> select('ithems',['id','text']);
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
                    echo '<li id="ithem-'.$item['id'].'" class="list-group-item ">';
                    echo $item ['text'];
                    //echo '<div class = "row">';
                        echo '<div class ="controls float-right">';
                        echo '<a href = "edit.php?id='.$item['id'].'" class="edit-link">edit</a>';
                        echo '<a href = "delete.php?id=' . $item['id'] . '" class=" delete-link "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg></a>';
                        echo '</div>';
                   // echo '</div>';
                    echo '</li>';

                }


        ?>
<!--        <li class="list-group-item">toto je  natvrdo napisany zoznam</li>-->
<!--        <li class="list-group-item">a toto je tiez nieco podobne</li>-->
    </ul>

    <form id="add-form" action="_inc/add-item.php" class="col-sm-6" method="post">
        <p class="form-group ">
            <textarea name="message" id="text" cols="30" rows="3" placeholder="Novy zapis" class="form-control" ></textarea>
        </p>
  <!--     <p class="form-group ">

             <button type="submit" class=" btn-sm btn-danger">Ad new thing</button>
        </p> -->
    </form>
</div>


<?php include_once "shared/foother.php" ?>



