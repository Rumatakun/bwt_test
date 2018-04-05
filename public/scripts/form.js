var validatorMethods ={
    notEmpty: function(el){ console.log('asff!');
        if(el.value == ''){ console.log('afas_EMPTY!');
            return true;
        }
        return false;
    },
    pattern: function(el, pattern){ console.log('pattern'+pattern.test(el.value));
        return pattern.test(el.value);
    },
    contains: function(el,el2){
        if(el.value== el2.value){
            return true;
        }
        return false;
    }
};

function Validator(settings){
    var formEl = document.getElementById('myform');
    var formsFields = formEl.elements;
    var errors = [];
    var rulesPattern ={
        email: /^\w{1,}@\w{1,}\.\w{2,}$/,
        name: /^\w{1,3}$/,
        password:/(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^&*]{6,}/g,
    };
    var showError= function(el){
        el.parentNode.classList.remove('success');
        el.parentNode.classList.add('error');
        el.nextElementSibling.innerHTML = el.dataset.error;
    }
    var showSucces= function (el) {
        el.parentNode.classList.remove('error');
        el.parentNode.classList.add('success');
        el.nextElementSibling.innerHTML = '';
    }
//-------------------------------------
    var isValid = function (el) {
        var methods = settings.methods[el.getAttribute('id')];
        if(methods !== undefined){ console.log(errors);

            for(var i=0;i<methods.length;i++){
                if(methods[i].length == 1){ //console.log(methods[i][0]);
                    // if(validatorMethods[methods[i][0]](el)){
                    //     console.log("empty");
                    //     errors.push({el:el});
                    // } else{return true;}
                }
                else{
                    if(!validatorMethods[methods[i][0]](el,rulesPattern[methods[i][1]])){
                        errors.push({el:el});
                    }else{return true;}
                }

            }
            for(var i=0;i<errors.length;i++){
                if(errors[i].el == el){ console.log('EROR!'); return false; }
            }
        }
        return true;
    }
//-------------------------------------

    var checkIt = function(){
        if(isValid(this)){
            showSucces(this); console.log(errors.length+'checkIt_Success');
            for(var i=0;i<errors.length;i++){ console.log('checkIt');
                if(errors[i].el == this){
                    errors.splice(i,1);
                    console.log('after del arr:'+ errors);
                }
            }
        }else{ console.log(errors.length+'checkIt3_error');
            showError(this);
            // errors.push({
            //     el:this
            // })
        }
    }

    //init here-------------------------------------------
    for(var i=0; i< formsFields.length;i++){
        if(formsFields[i].tagName == 'BUTTON'){
            continue;
        }
        formsFields[i].addEventListener('change',checkIt);
    }
    //
    for(var prop in settings.pattern){
        rulesPattern[prop] = settings.pattern[prop];
    }

}

if(document.getElementsByTagName('form').length!=0) {

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
                ['pattern', 'password']
            ],
            'name': [
                ['notEmpty'],
                ['pattern', 'name']
            ],
            'password2': [
                ['notEmpty'],
                ['contains', 'password1']
            ]
        }
    });
};