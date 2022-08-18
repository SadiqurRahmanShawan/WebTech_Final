function update_farmer()
{
    var is_valid = 1;
    
    var ID = document.getElementsByName("ID")[0].value;
    var NAME = document.getElementsByName("NAME")[0].value;
    var EMAIL = document.getElementsByName("EMAIL")[0].value;
    var GENDER = document.getElementsByName("GENDER")[0].value;
    var CONTACT_NO = document.getElementsByName("CONTACT_NO")[0].value;
    var TITLE = document.getElementsByName("TITLE")[0].value;
    var ADDRESS = document.getElementsByName("ADDRESS")[0].value;

    if(NAME == "")
    {
        document.getElementById("name_error").innerHTML = "<b>Name</b> <span style='color:red;'>Required</span>";
        is_valid = 0;
    }

    if(EMAIL == "")
    {
        document.getElementById("email_error").innerHTML = "<b>Email</b> <span style='color:red;'>Required</span>";
        is_valid = 0;
    }

    if(is_valid == 1)
    {
        var post_data = { ID : ID, NAME : NAME, EMAIL : EMAIL, GENDER : GENDER, CONTACT_NO : CONTACT_NO, TITLE : TITLE, ADDRESS : ADDRESS }

        $.ajax({
            url:"../controller/update_farmer.php",
            type:"POST",
            data: post_data,
            success:function(data){
                var jsonData;
                try {
                    var jsonData = JSON.parse(data);
                } catch (e) {
                    alert("Something is wrong.");
                }

                // console.log(jsonData);

                if(jsonData.is_name_required == 1)
                {
                    document.getElementById("name_error").innerHTML = "<b>Name</b> <span style='color:red;'>Required</span>";
                    is_valid = 0;
                }

                if(jsonData.is_email_required == 1)
                {
                    document.getElementById("email_error").innerHTML = "<b>Email</b> <span style='color:red;'>Required</span>";
                    is_valid = 0;
                }

                if(jsonData.is_successful == 1)
                {
                    alert("The farmer is updated successfully.");
                } else
                {
                    alert("Something is wrong.");
                }
            }
        });
    }
}