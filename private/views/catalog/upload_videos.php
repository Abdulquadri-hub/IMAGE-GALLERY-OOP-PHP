<?php $this->view("includes/header",$data)?>

    <div  style="margin: auto; max-width:600px;width:100%; padding:2em;">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Videos Title">
                <small class="form-text text-mute">Add a title to your videos</small>
            </div>
            <div class="form-group">
                <input type="file" class="btn" name="file" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Uplaod Videos</button>
        </form>
    </div>

<?php $this->view("includes/footer",$data)?>