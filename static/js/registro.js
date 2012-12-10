$(document).ready(function(){       
        $('#divisionesDropdown').change(function(){ //any select change on the dropdown with id country trigger this code
            $("#licenciaturaDropdown > option").remove(); //first of all clear select items
            div_id = $('#divisionesDropdown').val();  // here we are taking country id of the selected one.

            $.ajax({
                type: "POST",
                url: "http://localhost/Boligrama/index.php/registro_c/licenciaturas_c/"+div_id,
                success: function(licenciaturas) //we're calling the response json array 'cities'
                {
                    $.each(licenciaturas,function(idlicenciatura,nombre) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(idlicenciatura);
                        opt.text(nombre);
                        opt.attr('name','licenciaturas[]')
                        $('#licenciaturaDropdown').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
                 
            });
             
        });
    });
