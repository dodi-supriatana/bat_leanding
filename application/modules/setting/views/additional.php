<table class="table table-bordered" style="cursor: pointer">
    <tr>
        <th>White Title</th>
        <td>
            <div ondblclick="onedit('white_title', 'additional')" id="white_title">
                <p style="padding: 0; margin: 0" id="white_title1"><?= $additional->white_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Red Title</th>
        <td>
            <div ondblclick="onedit('red_title', 'additional')" id="red_title">
                <p style="padding: 0; margin: 0" id="red_title1"><?= $additional->red_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Desc Title</th>
        <td>
            <div ondblclick="onedit('desc_title', 'additional')" id="desc_title">
                <p style="padding: 0; margin: 0" id="desc_title1"><?= $additional->desc_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th style="width: 120px">Icon_1</th>
        <td>
            <div ondblclick="onedit('icon_1', 'additional')" id="icon_1">
                <p style="padding: 0; margin: 0" id="icon_11"><?= $additional->icon_1 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Label 1</th>
        <td>
            <div ondblclick="onedit('label_1', 'additional')" id="label_1">
                <p style="padding: 0; margin: 0" id="label_11"><?= $additional->label_1 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Label Desc 1</th>
        <td>
            <div ondblclick="onedit('label_desc_1', 'additional')" id="label_desc_1">
                <p style="padding: 0; margin: 0" id="label_desc_11"><?= $additional->label_desc_1 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Icon 2</th>
        <td>
            <div ondblclick="onedit('icon_2', 'additional')" id="icon_2">
                <p style="padding: 0; margin: 0" id="icon_21"><?= $additional->icon_2 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Label 2</th>
        <td>
            <div ondblclick="onedit('label_2', 'additional')" id="label_2">
                <p style="padding: 0; margin: 0" id="label_21"><?= $additional->label_2 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Label desc 2</th>
        <td>
            <div ondblclick="onedit('label_desc_2', 'additional')" id="label_desc_2">
                <p style="padding: 0; margin: 0" id="label_desc_21"><?= $additional->label_desc_2 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Icon 3</th>
        <td>
            <div ondblclick="onedit('icon_3', 'additional')" id="icon_3">
                <p style="padding: 0; margin: 0" id="icon_31"><?= $additional->icon_3 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Label 3</th>
        <td>
            <div ondblclick="onedit('label_3', 'additional')" id="label_3">
                <p style="padding: 0; margin: 0" id="label_31"><?= $additional->label_3 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Label desc 3</th>
        <td>
            <div ondblclick="onedit('label_desc_3', 'additional')" id="label_desc_3">
                <p style="padding: 0; margin: 0" id="label_desc_31"><?= $additional->label_desc_3 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Icon 4</th>
        <td>
            <div ondblclick="onedit('icon_4', 'additional')" id="icon_4">
                <p style="padding: 0; margin: 0" id="icon_41"><?= $additional->icon_4 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Label 4</th>
        <td>
            <div ondblclick="onedit('label_4', 'additional')" id="label_4">
                <p style="padding: 0; margin: 0" id="label_41"><?= $additional->label_4 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Label desc 4</th>
        <td>
            <div ondblclick="onedit('label_desc_4', 'additional')" id="label_desc_4">
                <p style="padding: 0; margin: 0" id="label_desc_41"><?= $additional->label_desc_4 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image</th>
        <td>
            <!-- <div ondblclick="onedit('image', 'additional')" id="image">
                <p style="padding: 0; margin: 0" id="image1"><?= $additional->image ?></p>
            </div> -->
            <div ondblclick="onedit('image', 'additional')" id="img">
                <?php echo form_upload('image', null, 'class="form-control" id="image" data-table="additional" name="image" onchange="submitForm(\'image\', \'additional\')"') ?>
            </div>
        </td>
    </tr>
</table>