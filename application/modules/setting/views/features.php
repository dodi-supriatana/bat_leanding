<table class="table table-bordered" style="cursor: pointer">
    <tr>
        <th>Black Title</th>
        <td>
            <div ondblclick="onedit('white_title', 'features')" id="white_title">
                <p style="padding: 0; margin: 0" id="white_title1"><?= $features->white_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Red Title</th>
        <td>
            <div ondblclick="onedit('red_title', 'features')" id="red_title">
                <p style="padding: 0; margin: 0" id="red_title1"><?= $features->red_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Description</th>
        <td>
            <div ondblclick="onedit('description', 'features')" id="description">
                <p style="padding: 0; margin: 0" id="description1"><?= $features->description ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image</th>
        <td>
            <!-- <div ondblclick="onedit('image', 'features')" id="image">
                <p style="padding: 0; margin: 0" id="image1"><?= $features->image ?></p>
            </div> -->
            <div ondblclick="onedit('image', 'features')" id="img">
                <?php echo form_upload('image', null, 'class="form-control" id="image" data-table="features" name="image" onchange="submitForm(\'image\', \'features\')"') ?>
            </div>
        </td>
    </tr>
    <?php for($i = 1; $i<=6; $i++){ 
        $label = 'label_title_'.$i;
        $desc = 'label_description_'.$i;
        $icon = 'icon_'.$i;
    ?>
    <tr>
        <th>Label Title <?=$i?></th>
        <td>
            <div ondblclick="onedit('<?=$label?>', 'features')" id="<?=$label?>">
                <p style="padding: 0; margin: 0" id="<?=$label?>1"><?= $features->$label ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Label Description <?=$i?></th>
        <td>
            <div ondblclick="onedit('<?=$desc?>', 'features')" id="<?=$desc?>">
                <p style="padding: 0; margin: 0" id="<?=$desc?>1"><?= $features->$desc ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Icon <?=$i?></th>
        <td>
            <div ondblclick="onedit('<?=$icon?>', 'features')" id="<?=$icon?>">
                <p style="padding: 0; margin: 0" id="<?=$icon?>1"><?= $features->$icon ?></p>
            </div>
        </td>
    </tr>
    <?php } ?>
</table>