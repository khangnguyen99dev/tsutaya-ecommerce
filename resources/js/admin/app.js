// jquery
import $ from "jquery";
import jQuery from "jquery";
window.$ = $;
window.jQuery =jQuery;

import "select2"
import select2 from 'select2';
select2();

document.addEventListener("DOMContentLoaded", function () {
    $(".select2").select2();
})