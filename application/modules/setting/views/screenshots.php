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
            <div ondblclick="onedit('image_1', 'screenshots')" id="image_1">
                <p style="padding: 0; margin: 0" id="image_11"><?= $screenshots->image_1 ?></p>
            </div>
            <!-- <div ondblclick="onedit('image_1', 'screenshots')" id="img">
                <?php echo form_upload('image_1', null, 'class="form-control" id="image_1" data-table="screenshots" name="image_1" onchange="submitForm(\'image_1\', \'screenshots\')"') ?>
            </div> -->
        </td>
    </tr>
    <tr>
        <th>Image 2</th>
        <td>
            <div ondblclick="onedit('image_2', 'screenshots')" id="image_2">
                <p style="padding: 0; margin: 0" id="image_21"><?= $screenshots->image_2 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 3</th>
        <td>
            <div ondblclick="onedit('image_3', 'screenshots')" id="image_3">
                <p style="padding: 0; margin: 0" id="image_31"><?= $screenshots->image_3 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 4</th>
        <td>
            <div ondblclick="onedit('image_4', 'screenshots')" id="image_4">
                <p style="padding: 0; margin: 0" id="image_41"><?= $screenshots->image_4 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 5</th>
        <td>
            <div ondblclick="onedit('image_5', 'screenshots')" id="image_5">
                <p style="padding: 0; margin: 0" id="image_51"><?= $screenshots->image_5 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 6</th>
        <td>
            <div ondblclick="onedit('image_6', 'screenshots')" id="image_6">
                <p style="padding: 0; margin: 0" id="image_61"><?= $screenshots->image_6 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 7</th>
        <td>
            <div ondblclick="onedit('image_7', 'screenshots')" id="image_7">
                <p style="padding: 0; margin: 0" id="image_71"><?= $screenshots->image_7 ?></p>
            </div>
        </td>
    </tr>
</table>