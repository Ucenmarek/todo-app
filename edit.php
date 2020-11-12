<?php include "shared/header.php" ?>
<div class="page-header">
    <h1>VERY MUCH TODO EDIT</h1>
    <hr>
</div>


<div class="row">
    <form id="edit-form" action="_inc/edit-new.php" class="col-sm-6" method="post">
        <p class="form-group ">
            <textarea name="message" id="text" cols="30" rows="3" placeholder="Novy zapis" class="form-control"></textarea>
        </p>
        <p class="form-group ">

            <button type="submit" class=" btn-sm btn-danger">Edit ithems</button>
        </p>
    </form>
</div>


<?php include "shared/foother.php" ?>