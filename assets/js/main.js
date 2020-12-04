window.onload = (event) => {
    var pageName = getFileName();
    $.each($('.nav-item'), function(){
        var parent = $(this);

        if(parent.find('.nav-link').attr('href') == pageName){
            parent.addClass('active');
            return;
        }

        $.each(parent.find('.collapse-item'), function(){
            if($(this).attr('href') == pageName){
                parent.addClass('active');
                return;
            }
        });
    });
};

function getFileName()
{
    var url = window.location.pathname;
    var lastUri = url.substring(url.lastIndexOf('/')+1);
    if(lastUri.indexOf('?')!= -1)
        return lastUri.substring(0,lastUri.indexOf('?'));
    else
        return lastUri;
}