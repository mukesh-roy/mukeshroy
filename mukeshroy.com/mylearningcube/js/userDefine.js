/**
 * Created by sameer on 16/6/14.
 *
 */
//open Country List in a popup
$('#changeCountry').on('click',
    function(){
        openAndSendRequest('helper/loadcountry.php', 'state-modal', '');
    }
);
//open Login Form in a popup
$('#loginBox').on('click',
    function(){
        $('#login-modal-form').removeClass('reveal-modal open large');
        $('#login-modal-form').addClass('reveal-modal tiny');
        //openAndSendRequest('helper/login.php', 'login-modal-form');
        $('#login-modal-form').foundation('reveal', 'open');
        sendRequest('helper/login.php', 'login-modal');
    }
);
// open request Call Back form
$('#requestCallBackDivId').on('click', function(){
        $('#callback').slideToggle('600',function(){
            sendRequest('helper/callback.php', 'callback');
        })
    }
);



// submit request Call Back form
$('#sendManagerAppro').on('click',
    function(){
        sendDataRequest('product/ProcessForm.php', 'managerMessage', 'managerApproval');
    }
);


// submit request Call Back form
$('#sendReferanceToFriend').on('click',
    function(){
        sendDataRequest('product/ProcessForm.php', 'reffrerMessage', 'reffrerToFriend');
    }
);
//user function start
function addThisValue(str){
    $('#identifier').val(str);
}

function setCountryVal(str){
    var selectedRegion = str;
    var defaultCurrency = 'USD';
    switch(selectedRegion){
        case 'IN':
            defaultCurrency = 'INR';
            break;
        case 'SG':
            defaultCurrency = 'SGD';
            break;
        case 'MY':
            defaultCurrency = 'MYR';
            break;
        default:
            break;

    }
    var expires= new Date(expiresTime*1000);
    var setRegion = 'country='+selectedRegion+'; expires='+expires+'; path=/; ';
    var setCurrency = 'currencyCode='+defaultCurrency+'; expires='+expires+'; path=/; ';
    document.cookie = setRegion;
    document.cookie = setCurrency;
    document.location.reload();
}
//user function end
// Function area end

// do other js operation
$('#searchbox').on("keyup",
    function searchCourse(e){
        var courseName = $('#searchbox').val();
        if(e.which==27 || courseName.length == 0){
            $("#search-results").empty().removeClass('show');
        } else {
            var inputKey = String.fromCharCode(e.keyCode);
            var whiteListCharacters = /[a-zA-Z0-9]/;
            var matched = whiteListCharacters.test(inputKey);

            if( matched != false || e.which == 8){
                if (courseName != '') {
                    var fileNameForRequest = phpVaribleInJs+'/product/SearchCourse.php';
                $.post(fileNameForRequest,
                    {name: courseName},
                    function(result){
                        $("#search-results").empty().removeClass('show');
                        var searchResults = JSON.parse(result);
                        if(searchResults.courses.length > 0){
                            for(var index = 0; index < searchResults.courses.length; index++){
                                var id = searchResults.courses[index].id;
                                var name = searchResults.courses[index].name;
                                var div = document.createElement("div");
                                var anchor = document.createElement("a");
                                anchor.setAttribute("href", phpVaribleInJs+"/product/product.php?id="+id);
                                anchor.innerHTML = name;
                                anchor.onclick=function(){
                                        $('#searchbox').val($(this).text());
                                        $('#search-results').empty().removeClass('show')
                                    };
                                div.appendChild(anchor);
                                document.getElementById("search-results").appendChild(div);
                            }
                            $("#search-results").stop().addClass('show');
                        }

                    });
                }
            return false;
            }
        }
    }
);


