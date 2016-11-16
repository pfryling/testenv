$(function() {
  var tab = $('.tabs-header a');
  
    tab.on('click', function(e) {
    e.preventDefault();
    
    // Switching Header Tab styles
    // 1. reset: remove .active on both header tab links
        tab.removeClass('active');
    // 2. add .active to clicked element
        $(this).addClass('active');

    // Switching Tab Content
    // 1. get the href of the clicked header tab 
    // (The header tab links' hrefs are the same as the IDs of content divs, which makes this work!)
    var tab_content = $(this).attr('href');
    // 2. reset: search for all DIVs that end with "tab-content" and remove .active
        $('div[id$="tab-content"]').removeClass('active');
    // 3. add .active to the corresponding content DIV
        $(tab_content).addClass('active');
 
    });
  
  // Display & Hide Overlay
  $('.join').on('click', function(e) {
    $(".apply-overlay, .modal").addClass('is-open');
  });
  
  $('.apply-overlay, .modal-btn').on('click', function() {
    $('.apply-overlay, .modal').removeClass('is-open');
  });

});


$('.select').on('click','.placeholder',function(){
  var parent = $(this).closest('.select');
  if ( ! parent.hasClass('is-open')){
    parent.addClass('is-open');
    $('.select.is-open').not(parent).removeClass('is-open');
  }else{
    parent.removeClass('is-open');
  }
}).on('click','ul>li',function(){
  var parent = $(this).closest('.select');
  parent.removeClass('is-open').find('.placeholder').text( $(this).text() );
  parent.find('input[type=hidden]').attr('value', $(this).attr('data-value') );
});