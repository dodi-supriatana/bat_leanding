<table class="table table-bordered" style="cursor: pointer">
    <tr>
        <th>Black Title</th>
        <td>
            <div ondblclick="onedit('black_title', 'welcome')" id="black_title">
                <p style="padding: 0; margin: 0" id="black_title1"><?= $welcome->black_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Red Title</th>
        <td>
            <div ondblclick="onedit('red_title', 'welcome')" id="red_title">
                <p style="padding: 0; margin: 0" id="red_title1"><?= $welcome->red_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Description</th>
        <td>
            <div ondblclick="onedit('description', 'welcome')" id="description">
                <p style="padding: 0; margin: 0" id="description1"><?= $welcome->description ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th style="width: 120px;">Desc</th>
        <td>
            <div ondblclick="onedit('desc', 'welcome')" id="desc">
                <p style="padding: 0; margin: 0" id="desc1"><?= $welcome->desc ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image</th>
        <td>
            <div ondblclick="onedit('image', 'welcome')" id="image">
                <p style="padding: 0; margin: 0" id="image1"><?= $welcome->image ?></p>
            </div>
        </td>
    </tr>
    <?php for($i = 1; $i<=3; $i++){ 
        $label = 'label_title_'.$i;
        $desc = 'label_description_'.$i;
        $icon = 'icon_'.$i;
    ?>
    <tr>
        <th>Label Title <?=$i?></th>
        <td>
            <div ondblclick="onedit('<?=$label?>', 'welcome')" id="<?=$label?>">
                <p style="padding: 0; margin: 0" id="<?=$label?>1"><?= $welcome->$label ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Label Description <?=$i?></th>
        <td>
            <div ondblclick="onedit('<?=$desc?>', 'welcome')" id="<?=$desc?>">
                <p style="padding: 0; margin: 0" id="<?=$desc?>1"><?= $welcome->$desc ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Icon <?=$i?></th>
        <td>
            <div ondblclick="onedit('<?=$icon?>', 'welcome')" id="<?=$icon?>">
                <p style="padding: 0; margin: 0" id="<?=$icon?>1"><?= $welcome->$icon ?></p>
            </div>
        </td>
    </tr>
    <?php } ?>
</table>