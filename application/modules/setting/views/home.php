<table class="table table-bordered" style="cursor: pointer">
    <tr>
        <th>Title White</th>
        <td>
            <div ondblclick="onedit('title_wihite', 'home')" id="title_wihite">
                <p style="padding: 0; margin: 0" id="title_wihite1"><?= $home->title_wihite ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Title Red</th>
        <td>
            <div ondblclick="onedit('Title_red', 'home')" id="Title_red">
                <p style="padding: 0; margin: 0" id="Title_red1"><?= $home->Title_red ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Middle Title</th>
        <td>
            <div ondblclick="onedit('midle_title', 'home')" id="midle_title">
                <p style="padding: 0; margin: 0" id="midle_title1"><?= $home->midle_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Title White 2</th>
        <td>
            <div ondblclick="onedit('title_wihite_2', 'home')" id="title_wihite_2">
                <p style="padding: 0; margin: 0" id="title_wihite_21"><?= $home->title_wihite_2 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th style="width: 120px">Desc</th>
        <td>
            <div ondblclick="onedit('desc', 'home')" id="desc">
                <p style="padding: 0; margin: 0" id="desc1"><?= $home->desc ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 1</th>
        <td>
            <div ondblclick="onedit('img_1', 'home')" id="img">
                <?php echo form_upload('img_1', null, 'class="form-control" id="img_1" data-table="home" name="img_1" onchange="submitForm(\'img_1\', \'home\')"') ?>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 2</th>
        <td>
            <div ondblclick="onedit('img_2', 'home')" id="img">
                <?php echo form_upload('img_2', null, 'class="form-control" id="img_2" data-table="home" name="img_2" onchange="submitForm(\'img_2\', \'home\')"') ?>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 3</th>
        <td>
            <div ondblclick="onedit('img_3', 'home')" id="img">
                <?php echo form_upload('img_3', null, 'class="form-control" id="img_3" data-table="home" name="img_3" onchange="submitForm(\'img_3\', \'home\')"') ?>
                <!-- <p style="padding: 0; margin: 0" id="img_31"><?= $home->img_3 ?></p> -->
            </div>
        </td>
    </tr>

</table>