<!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title text-center">DELETE ISSUANCE?</h3>
    </div>
    <div class="modal-body">
        <?php
        $a = $_GET['num'];

        echo "<a href=" . '../php/user/deleteIssuance.php?n=' . $a . " " ." class='btn btn-primary pull-left'>Delete</a>";
        ?>

        <a href="../user/issuance.php" class='btn btn-primary pull-right'>CANCEL</a>
    </div>
    <div class="modal-footer">

    </div>

</div>