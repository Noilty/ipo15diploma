//Код jQuery, установливающий маску для ввода телефона элементу input
//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
//https://itchief.ru/lessons/javascript/input-mask-for-html-input-element
$(function(){
  //2. Получить элемент, к которому необходимо добавить маску
  //$("#login-name").mask("99-99-999999-99-99", {placeholder: "СС-СС-НННННН-ДД-КК"});
  $("#mask_login").mask("99-99-999999-99-99");
});
/*Паспорт Серия*/
$(function(){
  $("#passport_series").mask("99-99");
});
/*Паспорт Номер*/
$(function(){
  $("#passport_number").mask("999999");
});
/*Номер Дома*/
$(function(){
  $("#house_number").mask("99");
});
/*Номер Квартиры*/
$(function(){
  $("#apartment_number").mask("99");
});
/*Номер лицевого счёта*/
$(function(){
  $("#personal_account_number").mask("999999");
});
/*Контактный телефон*/
$(function(){
  $("#contact_phone_number").mask("+7 (999) 999 99 99");
});
