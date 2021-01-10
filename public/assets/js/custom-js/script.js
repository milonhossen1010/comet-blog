(function($){
  $(document).ready(function(){
    $('.logout-btn').click(function(e){
        e.preventDefault();
        $("#logout-form").submit();
    });

    
    //Logo load
    $('#dark-logo').change(function(e){
        let file_url = URL.createObjectURL(e.target.files[0]);

        $('#dark-logo-load').attr('src', file_url);
    });

    $('#light-logo').change(function(e){
        let file_url = URL.createObjectURL(e.target.files[0]);

        $('#light-logo-load').attr('src', file_url);
    });

    //Client image show
    $('#cl1').change(function(e){
        let file_url = URL.createObjectURL(e.target.files[0]);

        $('#cl1-load').attr('src', file_url);
    });

    $('#cl2').change(function(e){
        let file_url = URL.createObjectURL(e.target.files[0]);

        $('#cl2-load').attr('src', file_url);
    });

    $('#cl3').change(function(e){
        let file_url = URL.createObjectURL(e.target.files[0]);

        $('#cl3-load').attr('src', file_url);
    });

    $('#cl4').change(function(e){
        let file_url = URL.createObjectURL(e.target.files[0]);

        $('#cl4-load').attr('src', file_url);
    });

    $('#cl5').change(function(e){
        let file_url = URL.createObjectURL(e.target.files[0]);

        $('#cl5-load').attr('src', file_url);
    });

    $('#cl6').change(function(e){
        let file_url = URL.createObjectURL(e.target.files[0]);

        $('#cl6-load').attr('src', file_url);
    });












    
});



})(jQuery)