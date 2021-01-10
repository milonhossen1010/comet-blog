(function ($) {
    $(document).ready(function () {

        //Make the DIV element draggagle:
        dragElement(document.getElementById("mydiv"));

        function dragElement(elmnt) {
            var pos1 = 0,
                pos2 = 0,
                pos3 = 0,
                pos4 = 0;
            if (document.getElementById(elmnt.id + "header")) {
                /* if present, the header is where you move the DIV from:*/
                document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
            } else {
                /* otherwise, move the DIV from anywhere inside the DIV:*/
                elmnt.onmousedown = dragMouseDown;
            }

            function dragMouseDown(e) {
                e = e || window.event;
                e.preventDefault();
                // get the mouse cursor position at startup:
                pos3 = e.clientX;
                pos4 = e.clientY;
                document.onmouseup = closeDragElement;
                // call a function whenever the cursor moves:
                document.onmousemove = elementDrag;
            }

            function elementDrag(e) {
                e = e || window.event;
                e.preventDefault();
                // calculate the new cursor position:
                pos1 = pos3 - e.clientX;
                pos2 = pos4 - e.clientY;
                pos3 = e.clientX;
                pos4 = e.clientY;
                // set the element's new position:
                elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
                elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
            }

            function closeDragElement() {
                /* stop moving when mouse button is released:*/
                document.onmouseup = null;
                document.onmousemove = null;
            }
        }


        //Edit popup show
        $(".edit-btn").click(function (e) {
            e.preventDefault();
            $("#mydiv").fadeToggle(200);
            $("#mydiv").css({
                "transform": "scale(1)"
            });
            $(this).css('opacity', '0');

        });

        $('.editor-close').click(function (e) {
            e.preventDefault();
            $("#mydiv").hide(200);
            $("#mydiv").css({
                "transform": "scale(0)"
            });
            $(".edit-btn").css('opacity', '1');
            $("#mydiv form").trigger("reset");
            $('.change-title, .change-subtitle, .change-des').attr('style','');
        });


        /**
         * Title change function
         */
        //Title text change
        $(document).on('keyup', '#mydiv input[name=title]', function () {
            $('.change-title').text(this.value);
        });

        //Title text color change
        $('#mydiv #title-color').change(function (e) {
            let color = $('#mydiv #title-color').val();

            $('.change-title').css({
                "color": color
            });
            $('#mydiv input[name=title_color]').val(color);
        });
        $('#mydiv input[name=title_color]').keyup(function () {
            $('.change-title').css({
                "color": this.value
            });
        });


        //Title text font size change
        $('#mydiv input[name=title_size]').change(function (e) {

            let size = this.value + 'px';
            $('.change-title').css('font-size', size);

            $(this).keyup(function () {
                let size = this.value + 'px';
                $('.change-title').css('font-size', size);
            });
        });


        /**
         * Subtitle change function
         */
        //Subtitle text change
        $(document).on('keyup', '#mydiv input[name=subtitle]', function () {
            $('.change-subtitle').text(this.value);
        });

        //subtitle text color change
        $('#mydiv #subtitle-color').change(function (e) {
            let color = $('#mydiv #subtitle-color').val();

            $('.change-subtitle').css({
                "color": color
            });
            $('#mydiv input[name=subtitle_color]').val(color);
        });

        $('#mydiv input[name=subtitle_color]').keyup(function () {
            $('.change-subtitle').css({
                "color": this.value
            });
        });

        //subtitle text font size change
        $('#mydiv input[name=subtitle_size]').change(function (e) {

            let size = this.value + 'px';
            $('.change-subtitle').css('font-size', size);

            $(this).keyup(function () {
                let size = this.value + 'px';
                $('.change-subtitle').css('font-size', size);
            });
        });


        /**
         * des change function
         */
        //des text change
        $(document).on('keyup', '#mydiv textarea[name=des]', function () {
            $('.change-des').text(this.value);
        });

        //des text color change
        $('#mydiv #des-color').change(function (e) {
            let color = $('#mydiv #des-color').val();

            $('.change-des').css({
                "color": color
            });

            $('#mydiv input[name=des_color]').val(color);
        });

        $('#mydiv input[name=des_color]').keyup(function () {
          $('.change-des').css({
              "color": this.value
          });
      });




        //des text font size change
        $('#mydiv input[name=des_size]').change(function (e) {

            let size = this.value + 'px';
            $('.change-des').css('font-size', size);

            $(this).keyup(function () {
                let size = this.value + 'px';
                $('.change-des').css('font-size', size);
            });
        });








    });
})(jQuery)
