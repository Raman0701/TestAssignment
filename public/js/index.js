$(document).ready(function (e) {
    $('#show').DataTable();

    $('#first_img').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => { 
          $('#img1').attr('src', e.target.result); 
        }
        reader.readAsDataURL(this.files[0]);  
        $('#preview_first_img').attr('style','')  
    });

    $('#second_img').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => { 
          $('#img2').attr('src', e.target.result); 
        }
        reader.readAsDataURL(this.files[0]);  
        $('#preview_second_img').attr('style','')  
    });

    $('#form').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        var id = $('#event_id').val();
        $.ajax({
            type:'POST',
            url: url+"/update-event/"+id,
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success: (data) => {
                console.log('data -->',data);
                $('#msg_div').removeClass('d-none');
                $('#preview_first_img').addClass('d-none');
                $('#preview_second_img').addClass('d-none');

                document.getElementById("form").reset(); 
                setTimeout(function(){
                    $('#msg_div').addClass('d-none');
                },5000);
            },
            error: function(data){
                console.log(data);
                setTimeout(function(){
                    $('#res_message').hide();
                    $('#msg_div').hide();
                },5000);
            }
        });
    });
});

