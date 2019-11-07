<table class="table table-bordered" style="cursor: pointer">
    <tr>
        <th>White Title</th>
        <td colspan="4">
            <div ondblclick="onedit('white_title', 'team')" id="white_title">
                <p style="padding: 0; margin: 0" id="white_title1"><?= $team->white_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Red Title</th>
        <td colspan="4">
            <div ondblclick="onedit('red_title', 'team')" id="red_title">
                <p style="padding: 0; margin: 0" id="red_title1"><?= $team->red_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Desc Title</th>
        <td colspan="4">
            <div ondblclick="onedit('desc_title', 'team')" id="desc_title">
                <p style="padding: 0; margin: 0" id="desc_title1"><?= $team->desc_title ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Person 1</th>
        <td>
            <div ondblclick="onedit('image_1', 'team')" id="img">
                <?php echo form_upload('image_1', null, 'class="form-control" id="image_1" data-table="team" name="image_1" onchange="submitForm(\'image_1\', \'team\')"') ?>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('name_1', 'team')" id="name_1">
                <p style="padding: 0; margin: 0" id="name_11"><?= $team->name_1 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('job_1', 'team')" id="job_1">
                <p style="padding: 0; margin: 0" id="job_11"><?= $team->job_1 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('bio_1', 'team')" id="bio_1">
                <p style="padding: 0; margin: 0" id="bio_11"><?= $team->bio_1 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Person 2</th>
        <td>
            <div ondblclick="onedit('image_2', 'team')" id="img">
                <?php echo form_upload('image_2', null, 'class="form-control" id="image_2" data-table="team" name="image_2" onchange="submitForm(\'image_2\', \'team\')"') ?>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('name_2', 'team')" id="name_2">
                <p style="padding: 0; margin: 0" id="name_21"><?= $team->name_2 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('job_2', 'team')" id="job_2">
                <p style="padding: 0; margin: 0" id="job_21"><?= $team->job_2 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('bio_2', 'team')" id="bio_2">
                <p style="padding: 0; margin: 0" id="bio_21"><?= $team->bio_2 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Person 3</th>
        <td>
            <div ondblclick="onedit('image_3', 'team')" id="img">
                <?php echo form_upload('image_3', null, 'class="form-control" id="image_3" data-table="team" name="image_3" onchange="submitForm(\'image_3\', \'team\')"') ?>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('name_3', 'team')" id="name_3">
                <p style="padding: 0; margin: 0" id="name_31"><?= $team->name_3 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('job_3', 'team')" id="job_3">
                <p style="padding: 0; margin: 0" id="job_31"><?= $team->job_3 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('bio_3', 'team')" id="bio_3">
                <p style="padding: 0; margin: 0" id="bio_31"><?= $team->bio_3 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Person 4</th>
        <td>
            <div ondblclick="onedit('image_4', 'team')" id="img">
                <?php echo form_upload('image_4', null, 'class="form-control" id="image_4" data-table="team" name="image_4" onchange="submitForm(\'image_4\', \'team\')"') ?>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('name_4', 'team')" id="name_4">
                <p style="padding: 0; margin: 0" id="name_41"><?= $team->name_4 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('job_4', 'team')" id="job_4">
                <p style="padding: 0; margin: 0" id="job_41"><?= $team->job_4 ?></p>
            </div>
        </td>
        <td>
            <div ondblclick="onedit('bio_4', 'team')" id="bio_4">
                <p style="padding: 0; margin: 0" id="bio_41"><?= $team->bio_4 ?></p>
            </div>
        </td>
    </tr>
</table>