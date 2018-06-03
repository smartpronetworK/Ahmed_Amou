(function worker() {

var array1;

    $.ajax({
        url: '../../Metier/Metier_get_status_users.php',

        success: function(data) {
            console.log('getting users status   success.');
            console.log(data);

            if(data.length > 0){
                array1 = JSON.parse(data);
            }
            if(array1.length > 0){
                for (var i=array1.length -1;i>=0;i--) {

                    var value=array1[i][3];
                    switch (value) {
                        case "expert":{
                            $("#expert_u").empty();
                            $("#expert_u").html( $("#expert_u").val()+1);
                            break;}
                        case "student":{
                            $("#student_u").empty();
                            $("#student_u").html( $("#student_u").val()+1);
                            break;}
                        case "jobless":{
                            $("#jobless_u").empty();
                            $("#jobless_u").html(value);
                            break;}
                        case "technician":{
                            $("#Technician_u").empty();
                            $("#Technician_u").html(value);
                            break;}
                    }
                }
                if( $('#expert_u').html() == '' ) {
                    $("#expert_u").html(0);
                }if( $('#student_u').html() == '') {
                    $("#student_u").html(0);
                }if( $('#jobless_u').html() == '' ) {
                    $("#jobless_u").html(0);
                }if( $('#Technician_u').html() == '' ) {
                    $("#Technician_u").html(0);
                }
            }
            if(array1.length > 0){
                $('#users > ul').empty();

                for (var i=array1.length -1;i>=0;i--) {
                    var check=array1[i][2];
                    switch (check) {
                        case "online":
                            $("#users > ul").append(' <li>  ' +
                                '                                <div class="user">\n' +
                                '                                    <div class="avatar">\n' +
                                '                                        <img src="'+array1[i][1]+'" alt="User name">\n' +
                                '                                        <div class="status online"></div>\n' +
                                '                                    </div>\n' +
                                '                                    <div class="name">'+array1[i][0]+'</div>\n' +
                                '                                    <div class="mood">'+array1[i][3]+'</div>\n' +
                                '                                </div></li>');




                            break;
                        case "offline":
                            $("#users > ul").append('   ' +
                                '                              <li>  <div class="user">\n' +
                                '                                    <div class="avatar">\n' +
                                '                                        <img src="'+array1[i][1]+'" alt="User name">\n' +
                                '                                        <div class="status offline"></div>\n' +
                                '                                    </div>\n' +
                                '                                    <div class="name">'+array1[i][0]+'</div>\n' +
                                '                                    <div class="mood">'+array1[i][3]+'</div>\n' +
                                '                                </div></li>');

                            break;

                    }



                }





            }else{
                console.log("array empty");
            }
        },
        complete: function() {
            // Schedule the next request when the current one's


            setTimeout(worker, 10000);
        }
    });







})();