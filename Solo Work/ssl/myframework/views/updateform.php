<div>

    <div class="container">

        <h1>Edit Fruit</h1>

        <form action="/about/updateItem" method="post">

            <?

            $id = $_GET["id"]; $name = $_GET["name"];

            echo "<input type=\"hidden\" name=\"id\" value='$id' />";
            echo "<input type=text name=\"name\" value='$name'/>";
            echo "<input type=\"submit\" />";

            ?>

        </form>

    </div>

</div>