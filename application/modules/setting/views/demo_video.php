<table class="table table-bordered" style="cursor: pointer">
    <tr>
        <th>White Title</th>
        <td>
            <div ondblclick="onedit('white_title', 'demo_video')" id="white_title">
                <p style="padding: 0; margin: 0" id="white_title1"><?= $demo_video->white_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Red Title</th>
        <td>
            <div ondblclick="onedit('red_title', 'demo_video')" id="red_title">
                <p style="padding: 0; margin: 0" id="red_title1"><?= $demo_video->red_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Desc Title</th>
        <td>
            <div ondblclick="onedit('desc_title', 'demo_video')" id="desc_title">
                <p style="padding: 0; margin: 0" id="desc_title1"><?= $demo_video->desc_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th style="width: 120px">Image</th>
        <td>
            <div ondblclick="onedit('image', 'demo_video')" id="img">
                <?php echo form_upload('image', null, 'class="form-control" id="image" data-table="demo_video" name="image" onchange="submitForm(\'image\', \'demo_video\')"') ?>
            </div>
        </td>
    </tr>
</table>