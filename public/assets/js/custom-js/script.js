(function ($) {
    $(document).ready(function () {
        $('.logout-btn').click(function (e) {
            e.preventDefault();
            $("#logout-form").submit();
        });


        //Logo load
        $('#dark-logo').change(function (e) {
            let file_url = URL.createObjectURL(e.target.files[0]);

            $('#dark-logo-load').attr('src', file_url);
        });

        $('#light-logo').change(function (e) {
            let file_url = URL.createObjectURL(e.target.files[0]);

            $('#light-logo-load').attr('src', file_url);
        });

        //Client image show
        $('#cl1').change(function (e) {
            let file_url = URL.createObjectURL(e.target.files[0]);

            $('#cl1-load').attr('src', file_url);
        });

        $('#cl2').change(function (e) {
            let file_url = URL.createObjectURL(e.target.files[0]);

            $('#cl2-load').attr('src', file_url);
        });

        $('#cl3').change(function (e) {
            let file_url = URL.createObjectURL(e.target.files[0]);

            $('#cl3-load').attr('src', file_url);
        });

        $('#cl4').change(function (e) {
            let file_url = URL.createObjectURL(e.target.files[0]);

            $('#cl4-load').attr('src', file_url);
        });

        $('#cl5').change(function (e) {
            let file_url = URL.createObjectURL(e.target.files[0]);

            $('#cl5-load').attr('src', file_url);
        });

        $('#cl6').change(function (e) {
            let file_url = URL.createObjectURL(e.target.files[0]);

            $('#cl6-load').attr('src', file_url);
        });



        //Slider
        $(document).on('click', '#add-slide', function (e) {
            e.preventDefault();
            let rand = Math.floor(Math.random() * 1000);





            $(".comet-slider-container").append('<div class="draggable card" draggable="true" id="slide-card-' + rand + '"  >' +
                '    <div data-parent="#accordion" class="card-header custom-card" style="padding: 25px; cursor: pointer;" data-toggle="collapse"' +
                '        data-target="#slide-' + rand + '">' +
                '        <h4 class=" mb-0 " style="color:#ff8084">Slide-' + rand + '<Span class="duplicate-close "><a id="slide-duplicate" class="' + rand + '" duplicate_id="' + rand + '" href="#"><i class="fa fa-files-o" aria-hidden="true"></i></a><a href="#" remove_id="' + rand + '"' +
                '                id="slide-remove-btn" ><i class="fa fa-times" aria-hidden="true"></i></a></Span></h4>' +
                '    </div>' +
                '    <div id="slide-' + rand + '" class="card-body collapse ">' +
                '        <div class="form">' +
                '            <div class="form-group mb-3 row"><label for="validationCustom01"  class="col-xl-3 col-sm-4 mb-0">Title' +
                '                    :</label><input name="title[]" title="' + rand + '" class="form-control col-xl-8 col-sm-7" id="validationCustom01"' +
                '                    type="text" ><input type="hidden" value="' + rand + '" name="slide_code[]">' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Subtitle' +
                '                    :</label><input subtitle="' + rand + '" name="subtitle[]" class="form-control col-xl-8 col-sm-7" type="text" >' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Button One' +
                '                    Title :</label><input btn_one_title="' + rand + '" name="btn_one_title[]" class="form-control col-xl-8 col-sm-7" type="text"' +
                '                    >' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Button One' +
                '                    Link :</label><input  btn_one_link="' + rand + '" name="btn_one_link[]" class="form-control col-xl-8 col-sm-7" type="text">' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Button Two' +
                '                    Title :</label><input btn_two_title="' + rand + '" name="btn_two_title[]" class="form-control col-xl-8 col-sm-7" type="text"' +
                '                    >' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Button Two' +
                '                    Link :</label><input btn_two_link="' + rand + '" name="btn_two_link[]" class="form-control col-xl-8 col-sm-7" type="text">' +
                '               ' +
                '            </div>' +
                '        </div>' +
                '    </div>' +
                '</div>');

            myFunction();


        });

        //Remove slide 
        $(document).on('click', '#slide-remove-btn', function (e) {
            e.preventDefault();
            let id_code = $(this).attr('remove_id');
            $('#slide-card-' + id_code).remove();
            // if (confirm('Are you sure!') == true) {


            // }
        });


        // Slide duplicate 
        $(document).on('click', '#slide-duplicate', function (e) {
            e.preventDefault();
            let duplicate_id = $(this).attr('duplicate_id');
            let rand = Math.floor(Math.random() * 1000);
            let title = $('input[title=' + duplicate_id + ']').val();
            let subtitle = $('input[subtitle=' + duplicate_id + ']').val();
            let btn_one_title = $('input[btn_one_title=' + duplicate_id + ']').val();
            let btn_one_link = $('input[btn_one_link=' + duplicate_id + ']').val();
            let btn_two_title = $('input[btn_two_title=' + duplicate_id + ']').val();
            let btn_two_link = $('input[btn_two_link=' + duplicate_id + ']').val();




            $(".comet-slider-container").append('<div class="draggable card" draggable="true" id="slide-card-' + rand + '"  >' +
                '    <div data-parent="#accordion" class="card-header custom-card" style="padding: 25px; cursor: pointer;" data-toggle="collapse"' +
                '        data-target="#slide-' + rand + '">' +
                '        <h4 class=" mb-0 " style="color:#ff8084">Slide-' + rand + '<Span class="duplicate-close "><a id="slide-duplicate" class="' + rand + '" duplicate_id="' + rand + '" href="#"><i class="fa fa-files-o" aria-hidden="true"></i></a><a href="#" remove_id="' + rand + '"' +
                '                id="slide-remove-btn" ><i class="fa fa-times" aria-hidden="true"></i></a></Span></h4>' +
                '    </div>' +
                '    <div id="slide-' + rand + '" class="card-body collapse ">' +
                '        <div class="form">' +
                '            <div class="form-group mb-3 row"><label for="validationCustom01"  class="col-xl-3 col-sm-4 mb-0">Title' +
                '                    :</label><input value="' + title + '" name="title[]" title="' + rand + '" class="form-control col-xl-8 col-sm-7" id="validationCustom01"' +
                '                    type="text" ><input type="hidden" value="' + rand + '" name="slide_code[]">' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Subtitle' +
                '                    :</label><input value="' + subtitle + '" subtitle="' + rand + '" name="subtitle[]" class="form-control col-xl-8 col-sm-7" type="text" >' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Button One' +
                '                    Title :</label><input value="' + btn_one_title + '" btn_one_title="' + rand + '" name="btn_one_title[]" class="form-control col-xl-8 col-sm-7" type="text"' +
                '                    >' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Button One' +
                '                    Link :</label><input value="' + btn_one_link + '" btn_one_link="' + rand + '" name="btn_one_link[]" class="form-control col-xl-8 col-sm-7" type="text">' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Button Two' +
                '                    Title :</label><input value="' + btn_two_title + '" btn_two_title="' + rand + '" name="btn_two_title[]" class="form-control col-xl-8 col-sm-7" type="text"' +
                '                    >' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Button Two' +
                '                    Link :</label><input value="' + btn_two_link + '" btn_two_link="' + rand + '" name="btn_two_link[]" class="form-control col-xl-8 col-sm-7" type="text">' +
                '               ' +
                '            </div>' +
                '        </div>' +
                '    </div>' +
                '</div>');

            return false;
        });



        /**
         * Slider update 
         */
        //Slider update
        $(document).on('click', '#slider_edit', function (e) {
            e.preventDefault();
            let edit_id = $(this).attr('slider_edit_id');
            $('#slider_edit_modal').modal('show');

            $.ajax({
                url: "/slider/edit/" + edit_id,
                success: function (data) {
                    $('.slider_edit_data').html(data);
                }
            });

        });

        
        //Slider
        $(document).on('click', '#modal-add-slide', function (e) {
            e.preventDefault();
            let rand = Math.floor(Math.random() * 1000);





            $(".modal_slider_content").append('<div class="draggable card" draggable="true" id="slide-card-' + rand + '"  >' +
                '    <div data-parent="#accordion" class="card-header custom-card" style="padding: 25px; cursor: pointer;" data-toggle="collapse"' +
                '        data-target="#slide-' + rand + '">' +
                '        <h4 class=" mb-0 " style="color:#ff8084">Slide-' + rand + '<Span class="duplicate-close "><a id="slide-duplicate" class="' + rand + '" duplicate_id="' + rand + '" href="#"><i class="fa fa-files-o" aria-hidden="true"></i></a><a href="#" remove_id="' + rand + '"' +
                '                id="slide-remove-btn" ><i class="fa fa-times" aria-hidden="true"></i></a></Span></h4>' +
                '    </div>' +
                '    <div id="slide-' + rand + '" class="card-body collapse ">' +
                '        <div class="form">' +
                '            <div class="form-group mb-3 row"><label for="validationCustom01"  class="col-xl-3 col-sm-4 mb-0">Title' +
                '                    :</label><input name="title[]" title="' + rand + '" class="form-control col-xl-8 col-sm-7" id="validationCustom01"' +
                '                    type="text" ><input type="hidden" value="' + rand + '" name="slide_code[]">' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Subtitle' +
                '                    :</label><input subtitle="' + rand + '" name="subtitle[]" class="form-control col-xl-8 col-sm-7" type="text" >' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Button One' +
                '                    Title :</label><input btn_one_title="' + rand + '" name="btn_one_title[]" class="form-control col-xl-8 col-sm-7" type="text"' +
                '                    >' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Button One' +
                '                    Link :</label><input  btn_one_link="' + rand + '" name="btn_one_link[]" class="form-control col-xl-8 col-sm-7" type="text">' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Button Two' +
                '                    Title :</label><input btn_two_title="' + rand + '" name="btn_two_title[]" class="form-control col-xl-8 col-sm-7" type="text"' +
                '                    >' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Button Two' +
                '                    Link :</label><input btn_two_link="' + rand + '" name="btn_two_link[]" class="form-control col-xl-8 col-sm-7" type="text">' +
                '               ' +
                '            </div>' +
                '        </div>' +
                '    </div>' +
                '</div>');

            myFunction();


        });



      
        // Slide duplicate pop modal
        $(document).on('click', '#modal-slide-duplicate', function (e) {
            e.preventDefault();
            let duplicate_id = $(this).attr('duplicate_id');
            let rand = Math.floor(Math.random() * 1000);
            let title = $('input[title=' + duplicate_id + ']').val();
            let subtitle = $('input[subtitle=' + duplicate_id + ']').val();
            let btn_one_title = $('input[btn_one_title=' + duplicate_id + ']').val();
            let btn_one_link = $('input[btn_one_link=' + duplicate_id + ']').val();
            let btn_two_title = $('input[btn_two_title=' + duplicate_id + ']').val();
            let btn_two_link = $('input[btn_two_link=' + duplicate_id + ']').val();




            $(".modal_slider_content").append('<div class="draggable card" draggable="true" id="slide-card-' + rand + '"  >' +
                '    <div data-parent="#accordion" class="card-header custom-card" style="padding: 25px; cursor: pointer;" data-toggle="collapse"' +
                '        data-target="#slide-' + rand + '">' +
                '        <h4 class=" mb-0 " style="color:#ff8084">Slide-' + rand + '<Span class="duplicate-close "><a id="slide-duplicate" class="' + rand + '" duplicate_id="' + rand + '" href="#"><i class="fa fa-files-o" aria-hidden="true"></i></a><a href="#" remove_id="' + rand + '"' +
                '                id="slide-remove-btn" ><i class="fa fa-times" aria-hidden="true"></i></a></Span></h4>' +
                '    </div>' +
                '    <div id="slide-' + rand + '" class="card-body collapse ">' +
                '        <div class="form">' +
                '            <div class="form-group mb-3 row"><label for="validationCustom01"  class="col-xl-3 col-sm-4 mb-0">Title' +
                '                    :</label><input value="' + title + '" name="title[]" title="' + rand + '" class="form-control col-xl-8 col-sm-7" id="validationCustom01"' +
                '                    type="text" ><input type="hidden" value="' + rand + '" name="slide_code[]">' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Subtitle' +
                '                    :</label><input value="' + subtitle + '" subtitle="' + rand + '" name="subtitle[]" class="form-control col-xl-8 col-sm-7" type="text" >' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Button One' +
                '                    Title :</label><input value="' + btn_one_title + '" btn_one_title="' + rand + '" name="btn_one_title[]" class="form-control col-xl-8 col-sm-7" type="text"' +
                '                    >' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Button One' +
                '                    Link :</label><input value="' + btn_one_link + '" btn_one_link="' + rand + '" name="btn_one_link[]" class="form-control col-xl-8 col-sm-7" type="text">' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Button Two' +
                '                    Title :</label><input value="' + btn_two_title + '" btn_two_title="' + rand + '" name="btn_two_title[]" class="form-control col-xl-8 col-sm-7" type="text"' +
                '                    >' +
                '               ' +
                '            </div>' +
                '            <div class="form-group mb-3 row"><label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Button Two' +
                '                    Link :</label><input value="' + btn_two_link + '" btn_two_link="' + rand + '" name="btn_two_link[]" class="form-control col-xl-8 col-sm-7" type="text">' +
                '               ' +
                '            </div>' +
                '        </div>' +
                '    </div>' +
                '</div>');

            return false;
        });



        /**
         * Slider  preview
         */
        //Slider preview
        // $(document).on('click', '#slider_preview', function (e) {
        //     e.preventDefault();
        //     let view_id = $(this).attr('slider_preview');
            

        //     $.ajax({
        //         url: "/slider/view/" + view_id, 
        //         success: function (data) {
        //           $('#demo').html(data);
        //         }
        //     });
        //     $('#slider-view-modal').modal('show');
        // });

















    });



})(jQuery)
