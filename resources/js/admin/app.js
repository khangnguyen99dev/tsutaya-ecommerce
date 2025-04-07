import '../../../vendor/masmerise/livewire-toaster/resources/js';
import '../../../node_modules/jquery/dist/jquery.min.js';
import '../../../node_modules/jquery-ui/dist/jquery-ui.min.js';
import '../../../node_modules/tom-select/dist/css/tom-select.css';
import '../../../node_modules/tom-select/dist/js/tom-select.complete.min.js';
import '../../../node_modules/select2/dist/css/select2.min.css';
import '../../../node_modules/select2/dist/js/select2.min.js';

document.addEventListener("DOMContentLoaded", function () {
  $(".select2").select2();

  document.querySelectorAll('.tom-select-it').forEach(el => {
    if (!el.tomselect) { 
      new TomSelect(el, {
        sortField: {
          field: "text",
          direction: "asc"
        }
      });
    }
  });
});