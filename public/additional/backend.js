var handleFormMaskedInput = function() {
	"use strict";
	$(".masked-input-date").mask("99/99/9999");
	$(".masked-input-nik").mask("9999999999999999");
	$(".masked-input-rt-rw").mask("999");
	$(".masked-input-year").mask("9999");
};


var FormPluginsBackend = function () {
	"use strict";
	return {
		//main function
		init: function () {
			handleFormMaskedInput();
		}
	};
}();