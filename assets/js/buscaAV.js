var $j = jQuery.noConflict();
$j(document).ready(function () {
    $j("#cancela_cep").bind("click", function () {
        $j.ajax({
            type: 'GET',
            url: 'buscaAV/deleteCep',
            success: function () {
                window.location.href = 'home';
            },
            error: function () {
                console.log("error no ajax");
            }
        });
    });

    $j("#myInput99").on("keyup", function () {
        var value = $j(this).val().toLowerCase();
        $j(".av_iten *").filter(function () {
            $j(this).toggle($j(this).text().toLowerCase().indexOf(value) > -1)
        });
    });


});