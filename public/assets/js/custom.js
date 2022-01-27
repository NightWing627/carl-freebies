"use strict";

var Page = function() {
    var initPage = function() {
        $('select').selectpicker();

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
        
                reader.onload = function (e) {
                    $('#imageResult')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        
        
        $('#upload').on('change', function () {
            readURL(input);
        });
        
        /*  ==========================================
            SHOW UPLOADED IMAGE NAME
        * ========================================== */
        var input = document.getElementById( 'upload' );
        var infoArea = document.getElementById( 'upload-label' );
        
        input.addEventListener( 'change', showFileName );
        
        function showFileName( event ) {
            var input = event.srcElement;
            var fileName = input.files[0].name;
            infoArea.textContent = fileName;
        }

        ClassicEditor
        .create( document.querySelector( '.ckeditor' ) )
        .catch( error => {
            console.error( error );
        } );
    };

    return {
		//main function to initiate the module
		init: function() {
			initPage();
		},
	};
}();

jQuery(document).ready(function() {
	Page.init();
});

function checkPost() {
    // $('.ckeditor').contents().find('.cke_editable').focus();
    alert($('#postForm').serialize());
    return true;
}