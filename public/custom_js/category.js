$(document).ready(function () {
    showCategory();
});

function showSelectedImage(input = "", i = "") {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            var data =
                '<img src="' +
                e.target.result +
                '" width="100px" height="100px" >';
            $("#myImg" + i).html(data);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#category_form").on("submit", function (e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        url: host + "/add_category",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (msg) {
            if (msg.status_code == 200) {
                toastr["success"](msg.message);
                clearForm();
                $("#myImg").html(
                    '<img src="' +
                        host +
                        'default.jpg" id="blah" width="100px" height="100px">'
                );
                showCategory();
            } else if (msg.status_code == 301) {
                $.each(msg.message, function (k, v) {
                    toastr["error"](v);
                });
            } else if (msg.status_code == 201) {
                toastr["error"](msg.message);
            }
        },
    });
});

function showCategory() {
    $("#category_table").DataTable().destroy();
    $("#category_table").DataTable({
        processing: true,
        serverSide: true,
        ajax: host + "/show_category",
        columns: [
            { data: "DT_RowIndex" },
            { data: "title" },
            { data: "category_img" },
            { data: "action", searchable: false },
        ],
        columnDefs: [
            { orderable: false, targets: [2, 3] }, //This part is ok now
        ],
        lengthMenu: [
            [5, 10, 25, 50, 100, -1],
            [5, 10, 25, 50, 100, "All"],
        ],
        hideEmptyCols: {
            emptyVals: [null, false, ""],
        },
    });
}

function edit_category(id = "") {
    $.ajaxSetup({
        headers: { "X-CSRF-Token": $("meta[name=csrf-token]").attr("content") },
    });
    $.ajax({
        url: host + "/edit_category",
        data: { id: id },
        type: "post",
        dataType: "json",
        success: function (response) {
            if (response.status_code == 200) {
                $("#id").val(response.data.id);
                $("#title").val(response.data.title);
                $("#myImg").html(
                    '<img src="' +
                        host +
                        "/uploads/" +
                        response.data.url +
                        '" width="100px" height="100px">'
                );
                $("#btn_add").html('<i class="fa fa-check-circle"></i> Update');
                $("#card-title").html("Update Category");
            } else {
                console.log(response.message);
            }
        },
    });
}

function delete_category(id = "") {
    $.ajaxSetup({
        headers: { "X-CSRF-Token": $("meta[name=csrf-token]").attr("content") },
    });
    if (confirm("Are you sure!")) {
        $.ajax({
            url: host + "/delete_category",
            data: { id: id },
            type: "post",
            dataType: "json",
            success: function (response) {
                if (response.status_code == 200) {
                    toastr["success"](response.message);
                    clearForm();
                    showCategory();
                } else if (response.status_code == 403) {
                    toastr["error"](response.message);
                } else {
                    toastr["error"](response.message);
                    showCategory();
                }
            },
        });
    }
}

function statusCategory(id = "", status = "") {
    $.ajaxSetup({
        headers: { "X-CSRF-Token": $("meta[name=csrf-token]").attr("content") },
    });
    $.ajax({
        url: host + "/update_status_category",
        data: { id: id, status: status },
        type: "post",
        dataType: "json",
        success: function (response) {
            if (response.status_code == 200) {
                toastr["success"](response.message);
                showCategory();
            } else if (response.status_code == 201) {
                toastr["error"](response.message);
                showCategory();
            }
        },
    });
}

function clearForm() {
    $("#category_form").trigger("reset");
    $("#id").val("");
    $("#category_table").DataTable().destroy();
    $("#btn_add").html('<i class="fa fa-check-circle"></i> Submit');
    $("#card-title").html("Add Category");
}
