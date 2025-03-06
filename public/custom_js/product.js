ClassicEditor.create(document.querySelector("#description")).catch((error) => {
    console.error(error);
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

$("#product_form").on("submit", function (e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        url: host + "/add_product",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (msg) {
            if (msg.status_code == 200) {
                toastr["success"](msg.message);
                clearForm();
                $("#collap_button").addClass("collapsed");
                $("#accor_plusExamplecollapse1").removeClass("show");
                $("#myImg").html(
                    '<div class="form-group col-6" id="myImg"><img src="' +
                        host +
                        '/default.jpg" id="blah" width="100px" height="100px"></div>'
                );
                show_product_table();
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

show_product_table();
function show_product_table() {
    $("#product_table").DataTable().destroy();
    $("#product_table").DataTable({
        processing: true,
        serverSide: true,
        ajax: host + "/show_products",
        columns: [
            { data: "DT_RowIndex" },
            { data: "book_title" },
            { data: "author_name" },
            { data: "mrp" },
            { data: "language" },
            { data: "image" },
            { data: "action", searchable: false },
        ],
        columnDefs: [
            { orderable: false, targets: [1, 2, 5, 6] }, //This part is ok now
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

function edit_product(id = "") {
    $.ajaxSetup({
        headers: { "X-CSRF-Token": $("meta[name=csrf-token]").attr("content") },
    });
    $.ajax({
        url: host + "/edit_product",
        data: { id: id },
        type: "post",
        dataType: "json",
        success: function (response) {
            if (response.status_code == 200) {
                $("#collap_button").removeClass("collapsed");
                $("#accor_plusExamplecollapse1").addClass("show");
                $("#id").val(response.data.id);
                $("#title").val(response.data.book_title);
                $("#category").val(response.data.category);
                $("#author_name").val(response.data.author_name);
                $("#mrp").val(response.data.mrp);
                $("#genre").val(response.data.genre);
                $("#language").val(response.data.language);
                $("#binding_type").val(response.data.binding_type);
                $("#no_of_page").val(response.data.no_of_page);
                $("#description").attr(response.data.description);
                $("#type").val(response.data.type);
                $("#isbn").val(response.data.isbn);
                $("#stockQuantity").val(response.data.stock_quantity);
                $("#submit").html('<i class="fa fa-check-circle"></i> Update');
                $("#card_title").html(
                    '<h3 class="card-title">Update Product</h3>'
                );
                show_product_table();
            } else {
                console.log(response.message);
            }
        },
    });
}

function delete_product(id = "") {
    $.ajaxSetup({
        headers: { "X-CSRF-Token": $("meta[name=csrf-token]").attr("content") },
    });
    if (confirm("Are you sure!")) {
        $.ajax({
            url: host + "/delete_product",
            data: { id: id },
            type: "post",
            dataType: "json",
            success: function (response) {
                if (response.status_code == 200) {
                    toastr["success"](response.message);
                    clearForm();
                    show_product_table();
                } else {
                    toastr["error"](response.message);
                    show_product_table();
                }
            },
        });
    }
}

function status_product(id = "", status = "") {
    $.ajaxSetup({
        headers: { "X-CSRF-Token": $("meta[name=csrf-token]").attr("content") },
    });
    $.ajax({
        url: host + "/update_status",
        data: { id: id, status: status },
        type: "post",
        dataType: "json",
        success: function (response) {
            if (response.status_code == 200) {
                toastr["success"](response.message);
                show_product_table();
            } else if (response.status_code == 201) {
                toastr["error"](response.message);
                show_product_table();
            }
        },
    });
}

$("#crl_btn").on("click", function () {
    clearForm();
});

function clearForm() {
    $("#product_form").trigger("reset");
    $("#id").val("");
    $("#product_image").val("");
    $("#product_table").DataTable().destroy();
    $("#submit").html('<i class="fa fa-check-circle"></i> Submit');
    $("#card_title").html("Add Product");
}
