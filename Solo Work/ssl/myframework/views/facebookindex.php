

<div class="container" style="margin-top:100px">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <img src="<?php echo $_SESSION['userData']['picture']['url']?>">
        </div>
        <div class="col-md-9">
            <table class="table table-hover table-bordered">
                <tbody>
                <tr>
                    <td>ID</td>
                    <td><?php echo $_SESSION['userData']['id']?></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><?php echo $_SESSION['userData']['first_name']?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><?php echo $_SESSION['userData']['last_name']?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $_SESSION['userData']['email']?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>