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


            $(".comet-slider-container").prepend('  <div id="slide-card-' + rand + '" class="card"><div data-parent="#accordion" class="card-header " style="padding: 25px; cursor: pointer;" data-toggle="collapse" data-target="#slide-' + rand + '"><h4 class=" mb-0 " style="color:#ff8084">Hello world<a href="#" remove_id="' + rand + '" id="slide-remove-btn"  class="close">&times;</a></h4></div><div id="slide-' + rand + '" class="card-body collapse "><div class="form"><div class="form-group mb-3 row"><label for="validationCustom01"class="col-xl-3 col-sm-4 mb-0">Title :</label><input class="form-control col-xl-8 col-sm-7"id="validationCustom01" type="text" required=""><div class="valid-feedback">Looks good!</div></div><div class="form-group mb-3 row"><label for="validationCustom02"class="col-xl-3 col-sm-4 mb-0">Subtitle :</label><input class="form-control col-xl-8 col-sm-7" type="text"required=""><div class="valid-feedback">Looks good!</div></div><div class="form-group mb-3 row"><label for="validationCustom02"class="col-xl-3 col-sm-4 mb-0">Button One Title :</label><input class="form-control col-xl-8 col-sm-7" type="text"required=""><div class="valid-feedback">Looks good!</div></div><div class="form-group mb-3 row"><label for="validationCustom02"class="col-xl-3 col-sm-4 mb-0">Button One Link :</label><input class="form-control col-xl-8 col-sm-7" type="text"><div class="valid-feedback">Looks good!</div></div><div class="form-group mb-3 row"><label for="validationCustom02"class="col-xl-3 col-sm-4 mb-0">Button Two Title :</label><input class="form-control col-xl-8 col-sm-7" type="text"required=""><div class="valid-feedback">Looks good!</div></div><div class="form-group mb-3 row"><label for="validationCustom02"class="col-xl-3 col-sm-4 mb-0">Button Two Link :</label><input class="form-control col-xl-8 col-sm-7" type="text"><div class="valid-feedback">Looks good!</div></div></div></div></div>');
        });

        //Remove slide 
        $(document).on('click', '#slide-remove-btn', function (e) {
            e.preventDefault();
            let id_code = $(this).attr('remove_id');

            if (confirm('Are you sure!') == true) {

                $('#slide-card-' + id_code).remove();
            }
        });


        //User delete alert
        $(document).on('click', '.delete_notification', function () {


            // Lobibox.confirm({
            //     msg: "Are you sure you want to delete this user?",
            //     callback: function ($this, type) {
            //         if (type === 'yes') {
            //             Lobibox.notify('success', {
            //                 msg: 'You have clicked "Yes" button.'

            //             });

            //         } else if (type === 'no') {
            //             Lobibox.notify('info', {
            //                 msg: 'You have clicked "No" button.'
            //             });

            //         }

            //     }




            // });


            if (confirm("Are you sure!") == true) {
                return true;
            } else {
                return false;
            }







        });






















    });



})(jQuery)



