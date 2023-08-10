$(document).ready(function() {
    $("#send_message").click(function(a) {

        let timeNow = new Date().getHours();
        let greeting =
            timeNow >= 5 && timeNow < 12 ?
            "Good Morning" :
            timeNow >= 12 && timeNow < 18 ?
            "Good Afternoon" :
            "Good Evening";

        a.preventDefault();
        var b = !1,
            c = $("#name").val(),
            d = $("#email").val(),
            e = $("#phone").val(),
            f = $("#message").val();
        var formdata = 'name=' + c + '&email=' + d + '&phone=' + e + '&message=' + f + '&greet=' + greeting;

        if ($("#name,#email,#phone,#message").click(function() {
                $(this).removeClass("error_input")
            }), 0 == c.length) {
            var b = !0;
            $("#name").addClass("error_input")
        } else $("#name").removeClass("error_input");
        if (0 == d.length || "-1" == d.indexOf("@")) {
            var b = !0;
            $("#email").addClass("error_input")
        } else $("#email").removeClass("error_input");
        if (0 == e.length) {
            var b = !0;
            $("#phone").addClass("error_input")
        } else $("#phone").removeClass("error_input");
        if (0 == f.length) {
            var b = !0;
            $("#message").addClass("error_input")
        } else $("#message").removeClass("error_input");
        0 == b && ($("#send_message").attr({
            disabled: "true",
            value: "Sending..."
        }), $.ajax({
            type: "POST",
            url: "indexhelp.php", //call indexhelp.php to store form data
            data: formdata,
            cache: false,
            success: function(html) {

                if (html == "sent") {
                    ($("#submit").remove(), $('#mail_fail').fadeOut(500), $("#mail_success").fadeIn(500))
                } else {
                    ($("#mail_fail").fadeIn(500), $("#send_message").removeAttr("disabled").attr("value", "Send The Message"))
                }
                document.getElementById('contact_form').reset();
                setTimeout(() => {
                    $("#mail_success").fadeOut()
                }, 10000)
            }

        }))
    })
});