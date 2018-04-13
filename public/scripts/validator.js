// методы проверки декларируемых условий

var validatorMethods ={
    notEmpty: function(el){
        if(el.value == ''){
            return true;
        }
        return false;
    },
    pattern: function(el, pattern){
        return pattern.test(el.value);
    },
    contains: function(el,el2){
        if(el.value== el2.value){ ;
            return true;
        }
        return false;
    }
};

// class Validator
function Validator(settings){
    var formEl = document.getElementById(settings.id);
    var formsFields = formEl.elements;
    var errors = [];
    var rulesPattern ={
        email: /^\w{1,}@\w{1,}\.\w{2,}$/,
        name: /^\w{1,3}$/,
        password:/^\w{6,$/,
    };
    var showError= function(el,msgtype){
        el.parentNode.classList.remove('success');
        el.parentNode.classList.add('error');
        el.nextElementSibling.innerHTML = settings.errormessage[msgtype];
    }
    var showSucces= function (el) {
        el.parentNode.classList.remove('error');
        el.parentNode.classList.add('success');
        el.nextElementSibling.innerHTML = '';
    }

    // form validation function
    var isValid = function (el){
        var methods = settings.methods[el.getAttribute('id')];
        var validationErrorResult;
        if(methods !== undefined){
            for(var i=0;i<methods.length;i++){
                var er= methods[i][0];
                // проверка методов без паттернов
                if(methods[i].length == 1) {
                    if(validatorMethods[er](el)){
                        if(!errorNotUnique(el,errors,er)){errors.push({el:el.id, error:er}); }
                        validationErrorResult= false;
                    }
                    else{
                        errorNotUnique(el,errors,er,'del');
                        validationErrorResult = true;
                    }
                }
                // проверка методов c паттернами
                if(methods[i].length == 2){
                    if(!validatorMethods[methods[i][0]](el,rulesPattern[methods[i][1]])){
                        if(!errorNotUnique(el,errors,er)){errors.push({el:el.id, error:er}); }
                        validationErrorResult= false;
                    }else{
                        errorNotUnique(el,errors,er,'del');
                        validationErrorResult = true;
                    }
                }
                //------------- yе рабтотет
                // if(methods[i].length == 3){  var el2=methods[i][2]; //console.log('ConteinsError'); console.log(!validatorMethods[methods[i][0]](el,methods[i][2]));
                //     if(!validatorMethods[methods[i][0]](el,methods[i][2])){
                //         if(!errorNotUnique(el,errors,er)){
                //             errors.push({el:el.id, error:er});
                //             //errors.push({el:methods[i][2], error:er});
                //             //---------------
                //             for(var i=0; i< formsFields.length;i++) {
                //                 if(formsFields[i].id == el2){console.log(formsFields[i]);
                //                 showError(formsFields[i],(el2+er)); }
                //             }
                //             console.log(el2);
                //         }
                //         //---------------
                //         console.log(errors);
                //         console.log('ERROR');
                //         validationErrorResult= false;
                //     }else{ console.log('NOTERROR');
                //         errorNotUnique(el,errors,er,'del');
                //        // errorNotUnique(el2,errors,er,'del');
                //         console.log(errors);
                //         validationErrorResult = true;
                //     }
                // }
                //--------------
            }
        }
        // Validation return
        if(errors.length==0){return true;}
        if(validationErrorResult){
            return true;
        }
        else{return false;}
    }
    //checking for errors
    var checkIt = function() {
        if(isValid(this)){
            showSucces(this);
        }else{
            for(var i=0;i<errors.length;i++){
                if(errors[i].el == this.id){
                    var errormessagetype =errors[i].el+errors[i].error;
                }
            }
            showError(this, errormessagetype);
        }
    }
    //--------------------------------
    var errorNotUnique= function(el,errors,er, del){
        if(errors.length>0){
            for(var j=0; j<errors.length;j++){
                if((errors[j].error == er)&&(errors[j].el == el.id)){
                    if(del!==null){ errors.splice(j,1);
                    }
                    return true;
                }
            }
        }
    }
    //----- НЕ ПАШЕТ, ПЛАВАЮЩИЕ ОШИБКИ ПРИ САБМИТЕ-----------------
    function buttonCheck(){
        var e = new Event('change');
        if(event){

            for(var i=0; i< formsFields.length;i++) {
                if(formsFields[i].tagName == 'BUTTON'){
                    continue;
                }
                var methods = settings.methods[formsFields[i].id];
                if(!methods){ continue;}

                // triggering input "change" event
                // for(var j=0; j< methods.length;j++) {
                //
                // }
                formsFields[i].dispatchEvent(e);
                var cssClassArray = formsFields[i].parentNode.classList.value;
                var errorClass = cssClassArray.search("error");
                if(errorClass !== -1){ event.preventDefault();
                    // console.log("we got error here");
                }else {
                    // console.log("it's ok");
                }
            }
        }
    }
    //init here-------------------------------------------
    for(var i=0; i< formsFields.length;i++){
        if(formsFields[i].tagName == 'BUTTON'){
            formsFields[i].addEventListener('click',buttonCheck);
            continue;
        }
        formsFields[i].addEventListener('change',checkIt);
    }
    //
    for(var prop in settings.pattern){
        rulesPattern[prop] = settings.pattern[prop];
    }
}

// validator declaration
if($('#myform').length) {
    var v = new Validator({
        id: 'myform',
        pattern: {},
        methods: {
            'email': [
                ['notEmpty'],
                ['pattern', 'email']
            ],
            'password': [
                ['notEmpty'],
                ['contains', 'password', 'password2'],
               ['pattern', 'password']
            ],
            'password2':[
                ['notEmpty'],
                ['contains', 'password2', 'password'],
                ['contains', 'password']
            ],
            'name':[
                ['notEmpty'],
            ],
            'surname':[
                ['notEmpty'],
            ],
        },
        errormessage:{
            'emailnotEmpty': 'Обязательный email',
            'emailpattern':'формат email!',
            'passwordnotEmpty':'Обязательный пароль',
            'passwordpattern':'формат пароля!',
            'passwordcontains':'пароли не cовпадают',
            'password2contains':'пароли не cовпадают',
            'password2notEmpty':'повторите пароль',
            'namenotEmpty':'введите имя',
            'surnamenotEmpty':'введите фамилию',
        }
    });
}