<form method="post">
    <div class="form-row align-items-center text-right">
        <div class="form-group col-md-2">
            <div class="checkbox text-center">
                <label style="font-size: 1.2em;">
                    <input type="checkbox" name="descriptionWork" value="">
                    <span class="cr"><i style="color:red;" class="cr-icon fa fa-check"></i></span>
                    توضیحات
                </label>
            </div>
        </div>
        <div class="form-group col-md-10">
            <input type="text" class="form-control form-control-lg" dir="rtl" name="workName" id="nameWork" autocomplete="off" placeholder="نام کار" required>
        </div>
    </div>
    <div class="form-row text-right">

        <div class="form-group col-md-12">
            <textarea class="form-control form-control-lg" dir="rtl" name="smsWork" id="exampleFormControlTextarea1" placeholder="متن اس ام اس" rows="3"></textarea>
        </div>

    </div>
    <button class="btn btn-info btn-lg btn-block btn3d" name="workSubmit" type="submit"><i class="fas fa-plus-square fa-2x"></i></button>
</form>
<br><br>
<hr>
<h1 class="text-center display-4">Works</h1><br>

<table class="table table-hover text-right">
    <thead class="thead-dark">
    <tr>
        <th scope="col"></th>
        <th scope="col">توضیحات</th>
        <th scope="col">متن اس ام اس</th>
        <th scope="col">نام کار</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>