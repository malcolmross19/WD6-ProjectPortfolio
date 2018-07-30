<div>

    <div class="container">
        <br><br>
        <h1>About Page</h1>
        <p><a href="/about/showAddForm">Add New</a></p>

        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Fruit Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                        foreach($data as $fruit){
                            echo "<tr><td>".$fruit["name"]."</td>";  //data-toggle='modal' data-target='#confirmDelete' id=$fruit[id]    ?id=".$fruit["id"]."
                            echo "<td><a href='/about/showUpdateForm?id=".$fruit["id"]."&name=".$fruit["name"]."'>EDIT</a> | <a href='/about/deleteItem?id=".$fruit["id"]."'>DELETE</a></td></tr>";
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>