
function showComment(item) {
    $("#m-reply-section").addClass("d-none");
    let item_id = "#"+$(item).attr('data-id');
    let response = $(item_id).find(".reply").html();
    $("#m-rev-app-label").html($(item_id).find(".t-app-name").html());
    $("#m-rev-pname").html($(item_id).find(".pname").html());
    $("#m-rev-pjob").html($(item_id).find(".pjob").html());
    $("#m-rev-comment").html($(item_id).find(".comment").html());
    if(response != ""){
        $("#m-rev-reply").html(response);
        $("#m-reply-section").removeClass("d-none");
    }
    $("#rev-modal").modal('show');
}

