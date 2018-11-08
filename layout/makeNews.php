<form method="post">
    <div class="form-group text-right">
        <label for="exampleFormControlInput1">عنوان اخبار</label>
        <input type="text" name="titleNews" class="form-control" dir="rtl" id="exampleFormControlInput1" value="<?php echo $arr['0']['title']; ?>" placeholder="">
    </div>

    <div class="form-group text-right">
        <label for="exampleFormControlTextarea1">توضیحات اخبار</label>
        <textarea class="form-control" dir="rtl" name="descNews" id="exampleFormControlTextarea1" rows="3"><?php echo $arr['0']['description']; ?></textarea>
    </div>
    <br>
    <button class="btn btn-info btn-lg btn-block btn3d" name="submitNews" type="submit"><i class="fas fa-edit fa-2x"></i></button>
</form>