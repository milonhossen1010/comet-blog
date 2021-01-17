(function ($) {
    $(document).ready(function () {
        $('.logout-btn').click(function (e) {
            e.preventDefault();
            $("#logout-form").submit();
        });

        
        //Img Preview Function
        function imgPreviewFunction(id, load_url) {
            $(id).change(function (e) {
                let file_url = URL.createObjectURL(e.target.files[0]);
    
                $(load_url).attr('src', file_url);
            });
    
        }

        //Logo load
        imgPreviewFunction('#dark-logo', '#dark-logo-load');
        imgPreviewFunction('#light-logo', '#light-logo-load');
        
        //Client image show
        imgPreviewFunction('#cl1', '#cl1-load');
        imgPreviewFunction('#cl2', '#cl2-load');
        imgPreviewFunction('#cl3', '#cl3-load');
        imgPreviewFunction('#cl4', '#cl4-load');
        imgPreviewFunction('#cl5', '#cl5-load');
        imgPreviewFunction('#cl6', '#cl6-load');
       



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

            draggable();


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

        
        //Slider edit js 
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

            // draggable();


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
 * Image slider js code
 */

        //Slider
        $(document).on('click', '#add-img-slide', function (e) {
            e.preventDefault();
            let rand = Math.floor(Math.random() * 1000);





            $(".img-slider-container").append('<div class="draggable card" draggable="true" id="slide-card-' + rand + '"  >' +
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
                            '<div class="form-group row add-product">'+
                            ''+
'                                        <div class="col-xl-4 col-sm-4 col-4">'+
'                                            <label class=" d-block pb-2 text-uppercase">Background Image</label>'+
'                                            <img style="max-height: 200px; width:auto" id="bg_image-load' + rand + '" class=" img-fluid mb-3" src="" alt="">'+
'                                            <ul class="file-upload-product">'+
'                                                <li>'+
'                                                    <div style="background: #333; border-radius: 3px;width: 100px; height: 30px;" class="box-input-file bg-black">'+
'                                                      '+
'                                                      <input name="bg_img[]"   id="bg_image' + rand + '" class="upload" type="file">'+
'                                                     <i class="fa fa-upload" aria-hidden="true"></i>'+
'                                                        <label style="font-size: 12px;" for="bg_image" class=" fs mb-0 pl-1 text-white">UPLOAD</label>'+
'                                                    </div>'+
'                                                </li>'+
''+
'                                            </ul>'+
'                                        </div>'+
''+'                                </div>' +
                '        </div>' +
                '    </div>' +
                '</div>');

        draggable();
        // image Preview
        imgPreviewFunction('#bg_image'+rand+'','#bg_image-load'+rand+'');

        });

  




      
    

















    });



})(jQuery)
