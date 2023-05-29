$('#listeRoles').on("change",function () {
    alert("ok")

    var role = $(this).val();
     $.ajax({
        type: 'POST',
        url: 'changeRole',
        data: {role: role},
        success: function (data) {location.reload();}
            });
})