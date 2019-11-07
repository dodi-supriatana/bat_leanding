<table class="table table-bordered" style="cursor: pointer">
    <tr>
        <th>White Title</th>
        <td>
            <div ondblclick="onedit('white_title', 'screenshots')" id="white_title">
                <p style="padding: 0; margin: 0" id="white_title1"><?= $screenshots->white_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Red Title</th>
        <td>
            <div ondblclick="onedit('red_title', 'screenshots')" id="red_title">
                <p style="padding: 0; margin: 0" id="red_title1"><?= $screenshots->red_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Desc Title</th>
        <td>
            <div ondblclick="onedit('desc_title', 'screenshots')" id="desc_title">
                <p style="padding: 0; margin: 0" id="desc_title1"><?= $screenshots->desc_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th style="width: 120px">Image_1</th>
        <td>
            <div ondblclick="onedit('image_1', 'screenshots')" id="img">
                <?php echo form_upload('image_1', null, 'class="form-control" id="image_1" data-table="screenshots" name="image_1" onchange="submitForm(\'image_1\', \'screenshots\')"') ?>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 2</th>
        <td>
            <div ondblclick="onedit('image_2', 'screenshots')" id="img">
                <?php echo form_upload('image_2', null, 'class="form-control" id="image_2" data-table="screenshots" name="image_2" onchange="submitForm(\'image_2\', \'screenshots\')"') ?>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 3</th>
        <td>
            <div ondblclick="onedit('image_3', 'screenshots')" id="img">
                <?php echo form_upload('image_3', null, 'class="form-control" id="image_3" data-table="screenshots" name="image_3" onchange="submitForm(\'image_3\', \'screenshots\')"') ?>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 4</th>
        <td>
            <div ondblclick="onedit('image_4', 'screenshots')" id="img">
                <?php echo form_upload('image_4', null, 'class="form-control" id="image_4" data-table="screenshots" name="image_4" onchange="submitForm(\'image_4\', \'screenshots\')"') ?>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 5</th>
        <td>
            <div ondblclick="onedit('image_5', 'screenshots')" id="img">
                <?php echo form_upload('image_5', null, 'class="form-control" id="image_5" data-table="screenshots" name="image_5" onchange="submitForm(\'image_5\', \'screenshots\')"') ?>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 6</th>
        <td>
            <div ondblclick="onedit('image_6', 'screenshots')" id="img">
                <?php echo form_upload('image_6', null, 'class="form-control" id="image_6" data-table="screenshots" name="image_6" onchange="submitForm(\'image_6\', \'screenshots\')"') ?>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 7</th>
        <td>
            <div ondblclick="onedit('image_7', 'screenshots')" id="img">
                <?php echo form_upload('image_7', null, 'class="form-control" id="image_7" data-table="screenshots" name="image_7" onchange="submitForm(\'image_7\', \'screenshots\')"') ?>
            </div>
        </td>
    </tr>
</table>