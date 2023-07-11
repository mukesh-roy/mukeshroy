/**
 * Created by sameer on 19/6/14.
 */
function openAndSendRequest(fileName, divPath){
    var compFileName = phpVaribleInJs+'/'+fileName;

    var responseLoc = '#'+divPath;
    var sendData = 'NULL';

    if($(responseLoc).is(':visible')){
        sendRequest(fileName, divPath);
    }else{
        $(responseLoc).foundation('reveal', 'open', compFileName);
    }
    return false;
}

function sendRequest(fileName, divPath){
    var compFileName = phpVaribleInJs+'/'+fileName;

    var responseLoc = '#'+divPath;
    $(responseLoc).html('<p>Please wait it may take a while...</p>');

    $.post(
        compFileName,
        function(data){
            $(responseLoc).html(data);
        }
    );
}

function sendDataRequest(fileName, divPath, postData){
    var compFileName = phpVaribleInJs+'/'+fileName;

    var responseLoc = '#'+divPath;
    var sendData = '';

    if(postData != ''){
        sendData = findAllPostValue(postData);
    }

    if(sendData != false){
        $(responseLoc).html('<p>Please wait it may take a while...</p>');
        $.post(
            compFileName,
            {postData: sendData},
            function(data){
                var searchString = data;
                if (searchString.search(/\bMOODLEREDIRECT\b/i) != -1) {
                    var urlString = searchString.split(",");
                    window.location = urlString[1];
                }else{
                    $(responseLoc).html(data);
                }
            }
        );
    }
}

function findAllPostValue(formId){
    var aa = document.getElementById(formId);
    var str = '';
    var returnValue = true;
    var errorValue = true;

    var sendArray = '';
    for (var i =0; i < aa.elements.length; i++){
        var newIds = aa.elements[i].id;
        var newValue = $('#'+newIds).val();
        var newPostValue = '';

        if(newValue != ''){
            newPostValue = newValue;
        }else {
            newPostValue = '0';
        }

        if(newValue != ''){
            if(newIds != ''){
                sendArray += newIds+'~'+newValue+'^';
            }
        }

        if(newIds != ''){
            returnValue = formValidation(newPostValue, newIds);
            if(returnValue == false){
                errorValue = returnValue;
            }
        }
    }

    if(errorValue == true){
        return sendArray;
    }else{
        return false;
    }
}

function formValidation(postValue, fieldName){
    var formFieldName = fieldName;
    var strName = formFieldName.indexOf('name');
    var strNumber = formFieldName.indexOf('no');
    var strEmail = formFieldName.indexOf('email');
    var divAddress = '#'+fieldName;
    var errorExist = '';

    if(strName > -1){
        if(postValue == '0'){
            errorExist = formFieldName;
        }
    }else if(strNumber > -1){
        if(postValue == '0'){
            errorExist = formFieldName;
        }else{
            if(!postValue.match(/^[0-9]+$/)){
                errorExist = formFieldName;
            }
        }
    }else if(strEmail > -1){
        if(postValue == '0'){
            errorExist = formFieldName;
        }else{
            if(!postValue.match(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/)){
                errorExist = formFieldName;
            }
        }
    }else{
        if(postValue == '0'){
            errorExist = formFieldName;
        }
    }

    if(errorExist != ''){
        $(divAddress).addClass('error');
        setTimeout(function(){
            $(divAddress).removeClass('error');
        },2000);
        return false;
    }
}

function sendRequestWithData(compFileName, sendData){
    $.post(
        compFileName,
        {postData: sendData}
    );
}

function trim(str){
    var str = '';
    str = str.replace(/^\s+/, '');
    for (var i = str.length - 1; i >= 0; i--) {
        if (/\S/.test(str.charAt(i))) {
            str = str.substring(0, i + 1);
            break;
        }
    }
    return str;
}