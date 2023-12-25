
$(document).ready(function () {
    //delete record
    $(".ConfirmDelete").click(function (e) {
        var form = $(this).closest("form");
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!"
        }).then(function (result) {
            if (result.value) {
                form.submit()
            }
        });
    });

    //Restore record
    $(".RestoreDelete").click(function (e) {
        var form = $(this).closest("form");
        Swal.fire({
            title: "Are you sure?",
            text: "You want to restore user?",
            icon: "info",
            showCancelButton: true,
            confirmButtonText: "Yes, Restore it!"
        }).then(function (result) {
            if (result.value) {
                form.submit()
            }
        });
    });

    //Copy Clipboard


    $('.CopyEmail').click(function (e) {
        e.preventDefault();
        $(this).find("span").remove();
        var $tempElement = $("<input>");
        $("body").append($tempElement);
        $tempElement.val($(this).text().trim()).select();
        document.execCommand("Copy");
        $tempElement.remove();
        $(this).append('<span class="text-success text-end fs-7 ms-2">Copied!</span>');
        var Tthis = $(this);
        setTimeout(ChangeIcon, 3000, Tthis);
        function ChangeIcon(parameter1) {
            Tthis.find("span").remove();
        }
    });

    if ($('#basic-datatable td').length == 0) {
        var count = $('#basic-datatable th').length;
        $('#basic-datatable tbody').html('<tr><td class="text-center text-muted fs-6 fw-bold" colspan="' + count + '">Data Not Found</td></tr>');
    }


    //role and permission
    $('.CheckAll').change(function () {
        if ($('.CheckAll:checked').length == $('.CheckAll').length) {
            $('#RoleSelectAll').prop('checked', true);
        } else {
            $('#RoleSelectAll').prop('checked', false);
        }
        var inputElement = $(".SelectRoleRow");
        $.each(inputElement, function( index, value ) {
            var inputClass = $(value).attr("class");
            var className = inputClass.split(" ")[2];
            if ($('.CheckAll.'+className+':checked').length == $('.CheckAll.'+className).length) {
                $('.SelectRoleRow.'+className).prop('checked', true)

            }else{
                $('.SelectRoleRow.'+className).prop('checked', false)
            }
        });
    });

    $('#RoleSelectAll').change(function (e) {
        e.preventDefault();
        if ($(this).is(':checked')) {
            $('.CheckAll').prop('checked', true);
        } else {
            $('.CheckAll').prop('checked', false);
        }
        var inputElement = $(".SelectRoleRow");
        $.each(inputElement, function( index, value ) {
            var inputClass = $(value).attr("class");
            var className = inputClass.split(" ")[2];
            if ($('.CheckAll.'+className+':checked').length == $('.CheckAll.'+className).length) {
                $('.SelectRoleRow.'+className).prop('checked', true)

            }else{
                $('.SelectRoleRow.'+className).prop('checked', false)
            }
        });
    });
    $('.SelectRoleRow').change(function (e) {
        e.preventDefault();
        if ($(this).is(':checked')) {
            $("." + $(this).prev('span').html()).prop('checked', true);
        } else {
            $("." + $(this).prev('span').html()).prop('checked', false);
        }
        if ($('.CheckAll:checked').length == $('.CheckAll').length) {
            $('#RoleSelectAll').prop('checked', true);
        } else {
            $('#RoleSelectAll').prop('checked', false);
        }
    });

    //Add more start
        $( "#addclone" ).click(function() {
            len = $("#tableclone tr").length;
            if (len>=1) {
                $('.removeclone').css('display', 'block');;

            }else{
                $('.removeclone').css('display', 'none');
            }
            var copyRow = $("tbody#tableclone").find("tr:last").clone();
            $(copyRow).find("input[type='text']").val('');
            $(copyRow).find("input[type='hidden']").val('');
            $(copyRow).find("input[type='file']").val('');
            $(copyRow).find("textarea").html('');
            $(copyRow).find("textarea").val('');
            $(copyRow).find("img").attr("src"," ");
            $(copyRow).find("input[type='number']").val('');
            $("tbody#tableclone").find("tr:last").after(copyRow);
        });

        $(document).on("click",".removeclone",function() {
            var el = $(this).closest("tr");
            if ($(this).closest("tbody").find("tr:gt(0)").length >= 1) {
                    el.remove();
            }
            len = $("#tableclone tr").length;
            if (len==1) {
                $('.removeclone').css('display', 'none');
            }
        });

    //End


    //Add more start
    $( "#addclone1" ).click(function() {
        len = $("#tableclone1 tr").length;
        if (len>=1) {
            $('.removeclone1').css('display', 'block');;

        }else{
            $('.removeclone1').css('display', 'none');
        }
        var copyRow = $("tbody#tableclone1").find("tr:last").clone();
        $(copyRow).find("input[type='text']").val('');
        $(copyRow).find("input[type='hidden']").val('');
        $(copyRow).find("input[type='file']").val('');
        $(copyRow).find("textarea").html('');
        $(copyRow).find("textarea").val('');
        $(copyRow).find("img").attr("src"," ");
        $(copyRow).find("input[type='number']").val('');
        $("tbody#tableclone1").find("tr:last").after(copyRow);
    });

    $(document).on("click",".removeclone1",function() {
        var el = $(this).closest("tr");
        if ($(this).closest("tbody").find("tr:gt(0)").length >= 1) {
                el.remove();
        }
        len = $("#tableclone1 tr").length;
        if (len==1) {
            $('.removeclone1').css('display', 'none');
        }
    });

//End

   //Add more start
   $( "#addclone2" ).click(function() {
    len = $("#tableclone2 tr").length;
    if (len>=1) {
        $('.removeclone2').css('display', 'block');;

    }else{
        $('.removeclone2').css('display', 'none');
    }
    var copyRow = $("tbody#tableclone2").find("tr:last").clone();
    $(copyRow).find("input[type='text']").val('');
    $(copyRow).find("input[type='hidden']").val('');
    $(copyRow).find("input[type='file']").val('');
    $(copyRow).find("textarea").html('');
    $(copyRow).find("textarea").val('');
    $(copyRow).find("img").attr("src"," ");
    $(copyRow).find("input[type='number']").val('');
    $("tbody#tableclone2").find("tr:last").after(copyRow);
});

$(document).on("click",".removeclone2",function() {
    var el = $(this).closest("tr");
    if ($(this).closest("tbody").find("tr:gt(0)").length >= 1) {
            el.remove();
    }
    len = $("#tableclone2 tr").length;
    if (len==1) {
        $('.removeclone2').css('display', 'none');
    }
});

//End


   //Add more start
   $( "#addclone3" ).click(function() {
    len = $("#tableclone3 tr").length;
    if (len>=1) {
        $('.removeclone3').css('display', 'block');;

    }else{
        $('.removeclone3').css('display', 'none');
    }
    var copyRow = $("tbody#tableclone3").find("tr:last").clone();
    $(copyRow).find("input[type='text']").val('');
    $(copyRow).find("input[type='hidden']").val('');
    $(copyRow).find("input[type='file']").val('');
    $(copyRow).find("textarea").html('');
    $(copyRow).find("textarea").val('');
    $(copyRow).find("img").attr("src"," ");
    $(copyRow).find("input[type='number']").val('');
    $("tbody#tableclone3").find("tr:last").after(copyRow);
});

$(document).on("click",".removeclone3",function() {
    var el = $(this).closest("tr");
    if ($(this).closest("tbody").find("tr:gt(0)").length >= 1) {
            el.remove();
    }
    len = $("#tableclone3 tr").length;
    if (len==1) {
        $('.removeclone3').css('display', 'none');
    }
});

//End

    /* For new  */



});

//Start  Check Date min form coupon create and edit
function CheckMinCreate(mindate) {
    if (mindate >= $('#todays').val()) {
        return true;
    } else {

        return false;
    }
}

// End Check Date min form coupon create and edit

//start Check the value has negative sign
function Negative(value) {
    if (/^\d*\.?\d+$/.test(value)) {
        return true;
    } else {
        return false;
    }
}
//End
//Not Space

function NotSpace(value) {
    if (value.indexOf(' ') !== -1) {
        return false;
    } else {
        return true;
    }
}
//End

//role and permission
if ($('.CheckAll:checked').length == $('.CheckAll').length) {
    $('#RoleSelectAll').prop('checked', true);
} else {
    $('#RoleSelectAll').prop('checked', false);
}

//role and permission check controller
var inputElement = $(".SelectRoleRow");
$.each(inputElement, function( index, value ) {
    var inputClass = $(value).attr("class");
    var className = inputClass.split(" ")[2];
    if ($('.CheckAll.'+className+':checked').length == $('.CheckAll.'+className).length) {
        $('.SelectRoleRow.'+className).prop('checked', true)

    }else{
        $('.SelectRoleRow.'+className).prop('checked', false)
    }
});

/* For new  */


