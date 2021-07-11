getCustomers();

$(document).ready(function(){
    $(document).on("submit","#addnewcust", function(event){
        event.preventDefault();

        $.ajax({

            url:"/tes/ajax.php",
            type:"POST",
            dataType:"json",
            data: new FormData(this),
            processData: false,
            contentType:false,
            beforeSend:function(){console.log("wait..")},
            success:function(){
                console.log("ola ok");
                location.reload();
            },
            error:function(){console.log("ooopss error")},

        });

    });

});


function getCustomers(){
    
 
    $.ajax({
    
            url:"/tes/ajax.php",
            type:"GET",
            dataType:"json",
            data:[action="action"] ,
            processData: false,
            contentType:false,
            beforeSend:function(){console.log("wait..")},
            success:function(mydata){ 
                var personlist="";     
                for (let i = 0; i < mydata.length; i++) {                
                    personlist+=showData(mydata[i]);
                  } 
                $("tbody").html(personlist); 
            },
            error:function(){console.log("ooopss error"); },
    
        });
    } 
 

 

function showData(data){ 
    var row="";
    if(data){
        row=`
            <tr>
                    <td>${data.firstname}</td>
                    <td>${data.lastname}</td>
                    <td>${data.phone_num}</td>
                    <td>${data.email}</td>
                    <td>${data.category}</td>
                    <td>                  
                    <form id="edituser" enctype="multpart/form-data">  
                    <input name="edituser" type="hidden" id="edituser" value="${data.id}"/><br>
                    <input name="action" type="hidden" value="edituser"/><br>
                    <button type="submit" class="btn btn-primary" id="editRecord" >edit</button> 
                    </form></td>
            </tr>        
        `;
    }
    return row; 
}






$(document).ready(function(){
    $(document).on("submit","#edituser", function(event){
        event.preventDefault();

        $.ajax({

            url:"/tes/ajax.php",
            type:"POST",
            dataType:"json",
            data: new FormData(this),
            processData: false,
            contentType:false,
            beforeSend:function(){console.log("wait..")},
            success:function(data){
                document.getElementById("editfirstname").value=data[0].firstname;
                document.getElementById("editlastname").value=data[0].lastname;
                document.getElementById("editemail").value=data[0].email;
                document.getElementById("editphone_num").value=data[0].phone_num;
                document.getElementById("editcategory").value=data[0].category; 
                document.getElementById("updateuserid").value=data[0].id; 
                
            },
            error:function(){console.log("ooopss error")},

        });

    });

});



$(document).ready(function(){
    $(document).on("submit","#updateuser", function(event){
        event.preventDefault();

        $.ajax({

            url:"/tes/ajax.php",
            type:"POST",
            dataType:"json",
            data: new FormData(this),
            processData: false,
            contentType:false,
            beforeSend:function(){console.log("wait..")},
            success:function(){
                console.log("ola ok");
                location.reload();
            },
            error:function(){console.log("ooopss error")},

        });

    });

});

 