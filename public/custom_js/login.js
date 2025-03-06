$("#login_form").on("submit", function (e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        url: host + "/admin_login",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (msg) {
            if (msg.status_code == 200) {
                toastr["success"](msg.message);
                window.location.href = host + "/dashboard";
            } else if (msg.status_code == 301) {
                $.each(msg.message, function (k, v) {
                    toastr["error"](v);
                });
            } else {
                console.log(msg.message);
                toastr["error"](msg.message);
            }
        },
    });
});

document.getElementById("logoutBtn").addEventListener("click", function () {
    localStorage.removeItem("jwt_token");
    window.location.href = "/";
});
