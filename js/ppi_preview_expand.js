(function (Drupal, $) {
    "use strict";

    Drupal.behaviors.previewExpand = {
        attach: function (context, settings) {
            var modalHtml = '<div id="ppi-preview-modal" class="ppi-preview-modal"><span class="ppi-preview-close">&times;</span><img class="ppi-preview-modal-content" id="expanded-preview"><div id="ppi-preview-caption"></div></div>';
            $(modalHtml).appendTo($('body'));

            var modal = document.getElementById('ppi-preview-modal');

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById('ppi-preview-id');
            var modalImg = document.getElementById("expanded-preview");
            var captionText = document.getElementById("ppi-preview-caption");
            img.onclick = function(){
              modal.style.display = "block";
              modalImg.src = this.src;
              captionText.innerHTML = this.alt;
            }
            
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("ppi-preview-close")[0];
            
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
              modal.style.display = "none";
            }
        }
    };
}) (Drupal, jQuery)