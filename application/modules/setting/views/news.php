<table class="table table-bordered" style="cursor: pointer">
    <tr>
        <th>Black Title</th>
        <td colspan="4">
            <div ondblclick="onedit('black_title', 'news')" id="black_title">
                <p style="padding: 0; margin: 0" id="black_title1"><?= $news->black_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Red Title</th>
        <td colspan="4">
            <div ondblclick="onedit('red_title', 'news')" id="red_title">
                <p style="padding: 0; margin: 0" id="red_title1"><?= $news->red_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Desc Title</th>
        <td colspan="4">
            <div ondblclick="onedit('desc_title', 'news')" id="desc_title">
                <p style="padding: 0; margin: 0" id="desc_title1"><?= $news->desc_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>News 1</th>
        <td>
            <div ondblclick="onedit('icon_1', 'news')" id="icon_1">
                <p style="padding: 0; margin: 0" id="icon_11"><?= $news->icon_1 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_image_1', 'news')" id="img">
                <?php echo form_upload('news_image_1', null, 'class="form-control" id="news_image_1" data-table="news" name="news_image_1" onchange="submitForm(\'news_image_1\', \'news\')"') ?>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_title_1', 'news')" id="news_title_1">
                <p style="padding: 0; margin: 0" id="news_title_11"><?= $news->news_title_1 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_desc_1', 'news')" id="news_desc_1">
                <p style="padding: 0; margin: 0" id="news_desc_11"><?= $news->news_desc_1 ?></p>
            </div>
        </td>       
    </tr>
    <tr>
        <th>News 2</th>
        <td>
            <div ondblclick="onedit('icon_2', 'news')" id="icon_2">
                <p style="padding: 0; margin: 0" id="icon_21"><?= $news->icon_2 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_image_2', 'news')" id="img">
                <?php echo form_upload('news_image_2', null, 'class="form-control" id="news_image_2" data-table="news" name="news_image_2" onchange="submitForm(\'news_image_2\', \'news\')"') ?>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_title_2', 'news')" id="news_title_2">
                <p style="padding: 0; margin: 0" id="news_title_21"><?= $news->news_title_2 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_desc_2', 'news')" id="news_desc_2">
                <p style="padding: 0; margin: 0" id="news_desc_21"><?= $news->news_desc_2 ?></p>
            </div>
        </td>       
    </tr>
    <tr>
        <th>News 3</th>
        <td>
            <div ondblclick="onedit('icon_3', 'news')" id="icon_3">
                <p style="padding: 0; margin: 0" id="icon_31"><?= $news->icon_3 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_image_3', 'news')" id="img">
                <?php echo form_upload('news_image_3', null, 'class="form-control" id="news_image_3" data-table="news" name="news_image_3" onchange="submitForm(\'news_image_3\', \'news\')"') ?>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_title_3', 'news')" id="news_title_3">
                <p style="padding: 0; margin: 0" id="news_title_31"><?= $news->news_title_3 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_desc_3', 'news')" id="news_desc_3">
                <p style="padding: 0; margin: 0" id="news_desc_31"><?= $news->news_desc_3 ?></p>
            </div>
        </td>       
    </tr>
    <tr>
        <th>News 4</th>
        <td>
            <div ondblclick="onedit('icon_4', 'news')" id="icon_4">
                <p style="padding: 0; margin: 0" id="icon_41"><?= $news->icon_4 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_image_4', 'news')" id="img">
                <?php echo form_upload('news_image_4', null, 'class="form-control" id="news_image_4" data-table="news" name="news_image_4" onchange="submitForm(\'news_image_4\', \'news\')"') ?>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_title_4', 'news')" id="news_title_4">
                <p style="padding: 0; margin: 0" id="news_title_41"><?= $news->news_title_4 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_desc_4', 'news')" id="news_desc_4">
                <p style="padding: 0; margin: 0" id="news_desc_41"><?= $news->news_desc_4 ?></p>
            </div>
        </td>       
    </tr>
    <tr>
        <th>News 5</th>
        <td>
            <div ondblclick="onedit('icon_5', 'news')" id="icon_5">
                <p style="padding: 0; margin: 0" id="icon_51"><?= $news->icon_5 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_image_5', 'news')" id="img">
                <?php echo form_upload('news_image_5', null, 'class="form-control" id="news_image_5" data-table="news" name="news_image_5" onchange="submitForm(\'news_image_5\', \'news\')"') ?>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_title_5', 'news')" id="news_title_5">
                <p style="padding: 0; margin: 0" id="news_title_51"><?= $news->news_title_5 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_desc_5', 'news')" id="news_desc_5">
                <p style="padding: 0; margin: 0" id="news_desc_51"><?= $news->news_desc_5 ?></p>
            </div>
        </td>       
    </tr>
    <tr>
        <th>News 6</th>
        <td>
            <div ondblclick="onedit('icon_6', 'news')" id="icon_6">
                <p style="padding: 0; margin: 0" id="icon_61"><?= $news->icon_6 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_image_6', 'news')" id="img">
                <?php echo form_upload('news_image_6', null, 'class="form-control" id="news_image_6" data-table="news" name="news_image_6" onchange="submitForm(\'news_image_6\', \'news\')"') ?>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_title_6', 'news')" id="news_title_6">
                <p style="padding: 0; margin: 0" id="news_title_61"><?= $news->news_title_6 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_desc_6', 'news')" id="news_desc_6">
                <p style="padding: 0; margin: 0" id="news_desc_61"><?= $news->news_desc_6 ?></p>
            </div>
        </td>       
    </tr>
    <tr>
        <th>News 7</th>
        <td>
            <div ondblclick="onedit('icon_7', 'news')" id="icon_7">
                <p style="padding: 0; margin: 0" id="icon_71"><?= $news->icon_7 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_image_7', 'news')" id="img">
                <?php echo form_upload('news_image_7', null, 'class="form-control" id="news_image_7" data-table="news" name="news_image_7" onchange="submitForm(\'news_image_7\', \'news\')"') ?>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_title_7', 'news')" id="news_title_7">
                <p style="padding: 0; margin: 0" id="news_title_71"><?= $news->news_title_7 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_desc_7', 'news')" id="news_desc_7">
                <p style="padding: 0; margin: 0" id="news_desc_71"><?= $news->news_desc_7 ?></p>
            </div>
        </td>       
    </tr>
    <tr>
        <th>News 8</th>
        <td>
            <div ondblclick="onedit('icon_8', 'news')" id="icon_8">
                <p style="padding: 0; margin: 0" id="icon_81"><?= $news->icon_8 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_image_8', 'news')" id="img">
                <?php echo form_upload('news_image_8', null, 'class="form-control" id="news_image_8" data-table="news" name="news_image_8" onchange="submitForm(\'news_image_8\', \'news\')"') ?>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_title_8', 'news')" id="news_title_8">
                <p style="padding: 0; margin: 0" id="news_title_81"><?= $news->news_title_8 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('news_desc_8', 'news')" id="news_desc_8">
                <p style="padding: 0; margin: 0" id="news_desc_81"><?= $news->news_desc_8 ?></p>
            </div>
        </td>       
    </tr>
</table>