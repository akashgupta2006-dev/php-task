<?php
require_once __DIR__ .'/api/functions.php';
?>
<html>
    <head>
	<style>
	#outer
	{
		min-height:500px;
		width:100%;
		background:white;
		border:1px solid white;
	}
	#inner
	{
		height:150px;
		width:300px;
		color:white;
		font-size:20px;
		font-weight:bold;
		background:linear-gradient(green,yellow,red);
		border:2px solid black;
		padding:10px;
		box-sizing:border-box;
		margin:0px auto;
	}
		#t
	{
		min-height:300px;
		color:white;
		font-size:18px;
		font-weight:bold;
		background:navy;
		border:2px solid black;
		margin:0px auto;
	}
	#records
	{
		color:white;
	}
	</style>
	
	</head>
    <body>
	<div id="outer">
	<div id="inner">
        <form id="form">
           Name: <input type="text" id="name"/><br/><br/>
           Email:<input type="email" id="email"/><br/><br/>
            <input type ="button" value="submit" id="submit" style="background:green;color:white;font-weight:bold;font-size:15px;border-radius:20px;"/>
            <input type ="reset" id="resetid" name="reset" style="background:black;color:white;font-weight:bold;font-size:15px;border-radius:20px;"/>
 <input type ="button"  value="update" id="update" style="background:black;color:white;font-weight:bold;font-size:15px;border-radius:20px; display:none;"/>
						
</form>
</div>
<div id="t">
<table border="1" width="100%" cellspacing="0" style="color:white">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <tbody id="records">
    </tbody>
</table>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>


$(document).ready(function(){
       load_emp_data();

       $("#submit").click(function(){
         
        var name = $("#name").val();
        var email = $("#email").val();
            if(name==""){
                window.alert("Name is required");
            }

            
            if(email==""){
                window.alert("Email is required");
            }

            if(name!="" && email!=""){
                insert_emp_data(name,email);
            }
            
       })
	   //update logic
	   $("#update").click(function(){
		  let name = $("#name").val(); 
		  let email = $("#email").val(); 
		  let id = $("#hidden-id").val(); 
		   updateemp(id,name,email);
	   });
	   //reset Logic
	   $("#resetid").click(function(){
		   let id = $("#hidden-id").val();
		   get_emp_data(id);
	   });
});

function load_emp_data(){

    $.ajax({
        url:"<?php echo url('api/getemp.php')?>",
        type:"GET",
        success:function(response){
            if(response.status==true && response.code ==200){
                let output = ``;
                response.data.forEach(function(emp,index){
                    output = output +`                
            <tr>
                <td>${emp.id}</td>
                <td>${emp.name}</td>
                <td>${emp.email}</td>
				<td><a href="javascript:handleEdit('${emp.id}');">Edit</a></td>
                <td><a href="javascript:handleDelete('${emp.id}');">Delete</a></td>
            </tr>`;
                });

            $("#records").html(output);

            }else{
                console.log(response.message);
            }
        }
    });
    
}
function handleEdit(id)
{
	$("#update").show();
	$("#submit").hide();
	$("#hidden-id").remove();
	get_emp_data(id);
	
}
function insert_emp_data(name,email){
    $.ajax({
        url:"<?php echo url('api/addemp.php'); ?>",
        type:"POST",
        data:{
            "name":name,
            "email":email,
        },
        success:function(response){
            if(response.code == 200 && response.status == true){
                window.alert(response.message);
                $("#name").val("");
                $("#email").val("");
            }else{
                window.alert(response.message);
                $("#name").val("");
                $("#email").val("");
            }
            load_emp_data();
        }
    })
}
function get_emp_data(id)
{
    $.ajax({
        url : "<?php echo url('api/getoneemp.php'); ?>",
        type : "POST",
        data : {
            'id': id
        },
        success : function(response)
        {
            if(response.code== 200 && response.status == true)
            {
                console.log(response.data);
                var emp = response.data;
                let name = emp.name;
                let email = emp.email;
                let  id   =    emp.id;
                $("#name").val(name);
                $("#email").val(email);
                $("#form").append(`<input type="hidden" id="hidden-id" value="${id}"> `)
            }else{
                window.alert(response.message);
            }
        }
    });
}

function handleDelete(id)
{
	if(window.confirm("Do you want to Delete ?"))
	{
		$.ajax({
			url:"<?php echo url("API/delete.php"); ?>",
			type:"POST",
			data:{"id":id},
			success:function(response){
				if(response.status == true && response.code == 200){
					load_emp_data();
				}else{
						window.alert(response.message);
				}
			},
});
	}
}

function updateemp(id,name,email){
	$.ajax({
		url:"<?php echo url('api/updateemp.php'); ?>",
		type:"POST",
		data:{
			"id":id,
			"name":name,
			"email":email
		},
		success:function(response){
			if(response.code == 200 && response.status == true)
			{
				load_emp_data();
				$("#name").val("");
				$("#email").val("");
				$("#hidden-id").remove();
				$("#update").hide();
				$("#submit").show();
			}else{
				window.alert(response.message);
			}
		}
	});
}
</script>

</body>
</html>