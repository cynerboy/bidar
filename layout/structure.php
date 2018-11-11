<form method="post">
    <div class="form-row align-items-center text-right">
        <div class="form-group col-md-2">
            <div class="checkbox text-center">
                <label style="font-size: 1.2em;">
                    <input type="checkbox" name="workDescription" value="">
                    <span class="cr"><i style="color:red;" class="cr-icon fa fa-check"></i></span>
                    توضیحات
                </label>
            </div>
        </div>
        <div class="form-group col-md-10">
            <input type="text" class="form-control form-control-lg" dir="rtl" name="workName" id="nameWorks" autocomplete="off" placeholder="نام کار" required>
        </div>
    </div>
    <div class="form-row text-right">

        <div class="form-group col-md-12">
            <textarea class="form-control form-control-lg" dir="rtl" name="workSms" id="exampleFormControlTextarea1" placeholder="متن اس ام اس" rows="3"></textarea>
        </div>

    </div>
    <button class="btn btn-info btn-lg btn-block btn3d" name="workSubmit" type="submit"><i class="fas fa-plus-square fa-2x"></i></button>
</form>
<br><br>
<hr>