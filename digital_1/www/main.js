$('.form').submit(function(e) {
    e.preventDefault();
    let year = $('#year').val();
    
    $.ajax({
        type: "POST",
        url: "check.php",
        cache: false,
        data: {
            'year': year,
        },
        dataType: 'html'
    }).done(function(result)
        {
            $("#answer").html(result);
        });
});