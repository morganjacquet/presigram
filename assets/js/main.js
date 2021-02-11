
(function ($) {
    var input = $('.validate-input .input-form');

    $('.contact100-form-btn').on('click',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }
        
        if (check == true) {
            var fd = new FormData();
            var file = $('#file-upload')[0].files;

            fd.append('file', file[0]);
            fd.append('verbe',$('#verbe').val());
            fd.append('adverbe',$('#adverbe').val());

            $.ajax({
                url: 'convert.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if (response != false) {
                        var x=new XMLHttpRequest();
                            x.open("GET", "http://presigram.morgan/tmp/"+response, true);
                            x.responseType = 'blob';
                            x.onload=function(e){download(x.response, response, "image/png" ); }
                            x.send();
                        deleteFile(response);
                    }
                },
            });
        }

        return check;
    });

    function deleteFile(filename) {
        var fd = new FormData();
            fd.append('filename', filename);

            $.ajax({
                url: 'delete.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if (response != false) {
                        console.log('file delete');
                    }
                },
            });
    }


    $('.validate-form .input-form').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);