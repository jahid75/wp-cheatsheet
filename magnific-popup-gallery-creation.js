// Magnific Popup
jQuery('.cus_gallery_slider').each(function(index, el) {
  $(this).magnificPopup({
        delegate: 'a.et_pb_lightbox_imagee',
        type: 'image',
        zoom:{
          enabled: true,
          duration: 300,
          easing: 'ease-in-out',
          opener: function(openerElement) {
          return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
        },
        gallery: {
          enabled:true
        }
    });
});
