<?php $this->view("includes/header",$data)?>

    <div  style="margin: auto; max-width:600px;width:100%; padding:2em;">
        <form action="" method="post" enctype="multipart/form-data">
            <h2 class="col-6 tm-text-primary">
                Signup
            </h2>

            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Enter E-mail">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="password" placeholder="Enter Password">
            </div>
            <!-- <div class="form-group">
                <input type="file" class="btn" name="file" placeholder="">
            </div> -->
            <button type="submit" class="btn btn-primary">Signup</button>
        </form>
    </div>

<?php $this->view("includes/footer",$data)?>