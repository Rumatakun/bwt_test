alert('!!!');
// var validatorMethods ={
//     notEmpty: function(el){
//         if(el.value == ''){
//             return true;
//         }
//         return false;
//     },
//     pattern: function(el, pattern){
//         return pattern.test(el.value);
//     },
//     contains: function(el,el2){
//         if(el.value== el2.value){
//             return true;
//         }
//         return false;
//     }
// };
//
// function Validator(settings){
//     var formEl = document.getElementById(settings.id);
//     var formsFields = formEl.elements;
//     var errors = [];
//     var errorList = [];
//     var rulesPattern ={
//         email: /^\w{1,}@\w{1,}\.\w{2,}$/,
//         name: /^\w{1,3}$/,
//         //password:/(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^&*]{6,}/g,
//     };
//     var showError= function(el,msgtype){
//         el.parentNode.classList.remove('success');
//         el.parentNode.classList.add('error');
//         el.nextElementSibling.innerHTML =   settings.errormessage[msgtype];
//     }
//     var showSucces= function (el) {
//         el.parentNode.classList.remove('error');
//         el.parentNode.classList.add('success');
//         el.nextElementSibling.innerHTML = '';
//     }
//     // form validation function
//     var isValid = function (el) {
//         var methods = settings.methods[el.getAttribute('id')];
//         var validationerrorResult;
//         if(methods !== undefined){
//             for(var i=0;i<methods.length;i++){
//                 if(methods[i].length == 1){
//                     // методами валидации проверяем на ошибк
//                     if(validatorMethods[methods[i][0]](el)){
//                         if(validationerrorResult!=true){
//                         var er = (el.id+methods[i][0]);
//                         //-----------------------
//                             if(!errorunique(errors,er)){errors.push({el:el,error:el.id+methods[i][0]});}
//                         //-----------------------
//                             validationerrorResult= true;
//                         }
//                     }
//                     else{ console.log(errors); console.log("noerror");
//                         errorunique(errors,er,'del');  console.log(errors);
//                         validationerrorResult= false;
//                     }
//                 }
//
//                 //validation methods with pattern
//                 if(methods[i].length > 1){
//                     if(!validatorMethods[methods[i][0]](el,rulesPattern[methods[i][1]])){
//                         if(validationerrorResult!=true) {
//                             var er = (el.id+methods[i][0]);
//                             if(!errorunique(errors,er)){errors.push({el: el, error: el.id + methods[i][0]});}
//                             validationerrorResult = true;
//                         }
//                     }else{ //------------
//                         console.log("patterntrue");
//                         validationerrorResult= false;
//                     }
//                 }
//             }
//             //checking if form element has already been marked in error array
//             if(errors.length==0){return true;}
//             for(var i=0;i<errors.length;i++){console.log("!!!!!!");console.log(errors[i]);
//                 if((errors[i].el == el)&&(validationerrorResult== true)){
//                     return false;
//                 }
//                 else{return true;}
//             }
//         }
//         // return true;
//     }
//
//     //checking for errors
//     var checkIt = function(){
//         if(isValid(this)){ console.log('valid');
//             showSucces(this);
//             for(var i=0;i<errors.length;i++){ console.log(errors[i].el);
//                 if(errors[i].el.id == this.id){
//                     errors.splice(i,1);  console.log(errors);
//                 }
//             }
//         }else{ console.log('notvalid');
//             for(var i=0;i<errors.length;i++){
//                 if(errors[i].el == this){
//                     var errormessagetype =errors[i].error;
//                 }
//             }
//             showError(this,errormessagetype);
//         }
//     }
//     // -----------
//     var buttonCheck= function(){
//         event.preventDefault();
//         alert('asfasf');
//     }
//     //----------
//     var errorunique= function(errors,er, del){
//         if(errors.length>0){
//             for(var j=0; j<errors.length;j++){
//                 if(errors[j].error == er){
//                     if(del!==null){ errors.splice(j-1,1);   }
//                     return true;
//                 }
//             }
//         }
//     }
//     //init here-------------------------------------------
//     for(var i=0; i< formsFields.length;i++){
//         if(formsFields[i].tagName == 'BUTTON'){
//             formsFields[i].addEventListener('click',buttonCheck);
//             continue;
//         }
//         formsFields[i].addEventListener('change',checkIt);
//     }
//     //
//     for(var prop in settings.pattern){
//         rulesPattern[prop] = settings.pattern[prop];
//     }
//
// }
//
//
//
// //============================================================
// if($('#myform').length) {
//
//     var v = new Validator({
//         id: 'myform',
//         pattern: {},
//         methods: {
//             'email': [
//                 ['notEmpty'],
//                 ['pattern', 'email']
//             ],
//             'password': [
//                 // ['notEmpty'],
//                 // ['pattern', 'password']
//             ],
//             'name': [
//                 ['notEmpty'],
//                 // ['pattern', 'name']
//             ],
//             'surname': [
//                 ['notEmpty'],
//                 // ['pattern', 'surname']
//             ],
//             'password2': [
//                 ['notEmpty'],
//                 ['contains', 'password1']
//             ],
//         },
//         errormessage:{
//             'emailnotEmpty': 'Обязательный email',
//             'emailpattern':'формат email!',
//             'passwordnotEmpty':'Обязательный пароль',
//             'password':'формат пароля!',
//         }
//     });
//
//     document.getElementById("sendMessageButton").addEventListener("click", function(event){
//         //event.preventDefault();
//     });
//
// };
//
