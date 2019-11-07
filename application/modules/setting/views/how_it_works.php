<table class="table table-bordered" style="cursor: pointer">
    <tr>
        <th style="width: 15%">Black Title</th>
        <td>
            <div ondblclick="onedit('black_title', 'how_it_works')" id="black_title">
                <p style="padding: 0; margin: 0" id="black_title1"><?= $how_it_works->black_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Red Title</th>
        <td>
            <div ondblclick="onedit('red_title', 'how_it_works')" id="red_title">
                <p style="padding: 0; margin: 0" id="red_title1"><?= $how_it_works->red_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Title Description</th>
        <td>
            <div ondblclick="onedit('title_description', 'how_it_works')" id="title_description">
                <p style="padding: 0; margin: 0" id="title_description1"><?= $how_it_works->title_description ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Desc</th>
        <td>
            <div ondblclick="onedit('desc', 'how_it_works')" id="desc">
                <p style="padding: 0; margin: 0" id="desc1"><?= $how_it_works->desc ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 1</th>
        <td>
            <div ondblclick="onedit('image_1', 'how_it_works')" id="img">
                <?php echo form_upload('image_1', null, 'class="form-control" id="image_1" data-table="how_it_works" name="image_1" onchange="submitForm(\'image_1\', \'how_it_works\')"') ?>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 2</th>
        <td>
            <div ondblclick="onedit('image_2', 'how_it_works')" id="img">
                <?php echo form_upload('image_2', null, 'class="form-control" id="image_2" data-table="how_it_works" name="image_2" onchange="submitForm(\'image_2\', \'how_it_works\')"') ?>
            </div>
        </td>
    </tr>
    <tr>
        <th>Subtitle</th>
        <td>
            <div ondblclick="onedit('subtitle', 'how_it_works')" id="subtitle">
                <p style="padding: 0; margin: 0" id="subtitle1"><?= $how_it_works->subtitle ?></p>
            </div>
        </td>
    </tr>
    <?php for ($i = 1; $i <= 4; $i++) {
        $desc = 'item_description_' . $i;
        $icon = 'icon_' . $i;
        ?>
        <tr>
            <th>item Description <?= $i ?></th>
            <td>
                <div ondblclick="onedit('<?= $desc ?>', 'how_it_works')" id="<?= $desc ?>">
                    <p style="padding: 0; margin: 0" id="<?= $desc ?>1"><?= $how_it_works->$desc ?></p>
                </div>
            </td>
        </tr>
        <tr>
            <th>Icon <?= $i ?></th>
            <td>
                <div ondblclick="onedit('<?= $icon ?>', 'how_it_works')" id="<?= $icon ?>">
                    <p style="padding: 0; margin: 0" id="<?= $icon ?>1"><?= $how_it_works->$icon ?></p>
                </div>
            </td>
        </tr>
    <?php } ?>
</table>