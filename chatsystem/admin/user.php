<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container">
	<div class="row">
		<?php include('userlist.php'); ?>
	</div>
</div>

<?php include('cruduser_modal.php'); ?>
<?php include('modal.php'); ?>

<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap.min.js"></script>
<script src="../js/dataTables.responsive.js"></script>
<script>
$(document).ready(function(){
	
	
	$('#userList').DataTable({
	"bLengthChange": true,
	"bInfo": true,
	"bPaginate": true,
	"bFilter": true,
	"bSort": false,
	"pageLength": 7
	});
	
	$(document).on('click', '#adduser', function(){
    firstname=$('#ufirstname').val();
    lastname=$('#ulastname').val();
    idno=$('#uidno').val();
    institution=$('#uinstitution').val();
    dateofbirth=$('#udateofbirth').val();
    Gender=$('#Gender').val();
    homecounty=$('#uhomecounty').val();
    phonenumber=$('#uphonenumber').val();
    password=$('#upassword').val();
    access=$('#uaccess').val();
    
    $.ajax({
        url:"add_user.php",
        method:"POST",
        data:{
            firstname: firstname,
            lastname: lastname,
            idno: idno,
            institution: institution,
            dateofbirth: dateofbirth,
            Gender: Gender,
            homecounty: homecounty,
            phonenumber: phonenumber,
            password: password,
            access: access,
            adduser: 1,
        },
        success:function(){
            window.location.href='user.php';
        }
    });
});

	//
	$(document).on('click', '.deleteuser', function(){
		var rid=$(this).val();
		$('#delete_user').modal('show');
		$('.modal-footer #confirm_delete').val(rid);
	});
	
	$(document).on('click', '#confirm_delete', function(){
		var nrid=$(this).val();
		$('#delete_user').modal('hide');
		$('body').removeClass('modal-open');
		$('.modal-backdrop').remove();
			$.ajax({
				url:"deleteuser.php",
				method:"POST",
				data:{
					id: nrid,
					del: 1,
				},
				success:function(){
					window.location.href='user.php';
				}
			});
	});
	
	$(document).on('click', '.edituser', function(){
    var rid=$(this).val();
    var firstname=$('#efirstname'+rid).val();
    var lastname=$('#elastname'+rid).val();
    var institution=$('#einstitution'+rid).val();
    var phonenumber=$('#ephonenumber'+rid).val();
    var password=$('#epassword'+rid).val();
    $('#edit_user').modal('show');
    $('.modal-body #user_fname').val(firstname);
    $('.modal-body #user_lname').val(lastname);
    $('.modal-body #user_institution').val(institution);
    $('.modal-body #user_phonenumber').val(phonenumber);
    $('.modal-body #user_pass').val(password);
    $('.modal-footer #confirm_update').val(rid);
});

$(document).on('click', '#confirm_update', function(){
    var nrid=$(this).val();
    var nfname=$('#user_fname').val();
    var nlname=$('#user_lname').val();
    var ninstitution=$('#user_institution').val();
    var nphonenumber=$('#user_phonenumber').val();
    var npass=$('#user_pass').val();
    $('#edit_user').modal('hide');
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
        $.ajax({
            url:"update_user.php",
            method:"POST",
            data:{
                id: nrid,
                fname: nfname,
                lname: nlname,
                institution: ninstitution,
                phonenumber: nphonenumber,
                password: npass,
                edit: 1,
            },
            success:function(){
                window.location.href='user.php';
            }
        });
});

 
});

</script>	
</body>
</html>