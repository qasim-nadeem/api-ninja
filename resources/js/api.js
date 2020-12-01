$(document).ready(function(){
    $('.btn-copy').on('click', (e) => {
        var myCode = $(e.currentTarget).parent().find('.endpoint').text();
        var fullLink = document.createElement('input');
        document.body.appendChild(fullLink);
        fullLink.value = myCode;
        fullLink.select();
        document.execCommand("copy", false);
        fullLink.remove();
    })
});
