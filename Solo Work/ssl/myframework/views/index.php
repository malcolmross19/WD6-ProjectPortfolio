

<!-- Page Content -->
<div class="container">
    <br><br>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin: 15px 0 10px 0;">
        Launch Modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hello!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    My Modal Says Hello.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <p>Click To Show Modal.</p>
    <br/><br/>

    <!-- Main component for a primary marketing message or call to action -->

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="../assets/images/placeholder.svg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="../assets/images/placeholder.svg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="../assets/images/placeholder.svg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br/><br/>

    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
    </div>
    <br/><br/>

    <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="My Popover" data-content="Here is my popover content.">Click to toggle popover</button>


</div>
<!-- /.container -->

<!-- Bootstrap core JavaScript -->
<script src="../assets/vendor/bootstrap/js/tether.min.js"></script>
<script src="../assets/vendor/jquery/jquery.min.js"></script>

<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>

<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>