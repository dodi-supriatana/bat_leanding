<table class="table table-bordered" style="cursor: pointer">
    <tr>
        <th style="width : 15%">Testimonials 1</th>
        <td>
            <div ondblclick="onedit('testimoni_1', 'testimonials')" id="testimoni_1">
                <p style="padding: 0; margin: 0" id="testimoni_11"><?= $testimonials->testimoni_1 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Name 1</th>
        <td>
            <div ondblclick="onedit('name_1', 'testimonials')" id="name_1">
                <p style="padding: 0; margin: 0" id="name_11"><?= $testimonials->name_1 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 1</th>
        <td>
            <!-- <div ondblclick="onedit('image_1', 'testimonials')" id="image_1">
                <p style="padding: 0; margin: 0" id="image_11"><?= $testimonials->image_1 ?></p>
            </div> -->
            <div ondblclick="onedit('image_1', 'testimonials')" id="img">
                <?php echo form_upload('image_1', null, 'class="form-control" id="image_1" data-table="testimonials" name="image_1" onchange="submitForm(\'image_1\', \'testimonials\')"') ?>
            </div>
        </td>
    </tr>
    <tr>
        <th>Testimonials 2</th>
        <td>
            <div ondblclick="onedit('testimoni_2', 'testimonials')" id="testimoni_2">
                <p style="padding: 0; margin: 0" id="testimoni_21"><?= $testimonials->testimoni_2 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Name 2</th>
        <td>
            <div ondblclick="onedit('name_2', 'testimonials')" id="name_2">
                <p style="padding: 0; margin: 0" id="name_21"><?= $testimonials->name_2 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 2</th>
        <td>
            <div ondblclick="onedit('image_2', 'testimonials')" id="img">
                <?php echo form_upload('image_2', null, 'class="form-control" id="image_2" data-table="testimonials" name="image_2" onchange="submitForm(\'image_2\', \'testimonials\')"') ?>
            </div>
        </td>
    </tr>
    <tr>
        <th>Testimonials 3</th>
        <td>
            <div ondblclick="onedit('testimoni_3', 'testimonials')" id="testimoni_3">
                <p style="padding: 0; margin: 0" id="testimoni_31"><?= $testimonials->testimoni_3 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Name 3</th>
        <td>
            <div ondblclick="onedit('name_3', 'testimonials')" id="name_3">
                <p style="padding: 0; margin: 0" id="name_31"><?= $testimonials->name_3 ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <th>Image 3</th>
        <td>
            <div ondblclick="onedit('image_3', 'testimonials')" id="img">
                <?php echo form_upload('image_3', null, 'class="form-control" id="image_3" data-table="testimonials" name="image_3" onchange="submitForm(\'image_3\', \'testimonials\')"') ?>
            </div>
        </td>
    </tr>
</table>