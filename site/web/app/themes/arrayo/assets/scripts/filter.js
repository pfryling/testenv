jQuery.noConflict();

var multiFilter = {

  $filterGroups: null,
  $filterUi: null,
  $reset: null,
  groups: [],
  outputArray: [],
  outputString: '',

  init: function(){
    var self = this;

    self.$filterUi = $('#Filters');
    self.$filterGroups = $('.filter-group');
    self.$reset = $('#Reset');
    self.$container = $('#Container');

    self.$filterGroups.each(function(){
      self.groups.push({
        $inputs: $(this).find('input'),
        active: [],
            tracker: false
      });
    });

    self.bindHandlers();
  },


  bindHandlers: function(){
    var self = this,
        typingDelay = 300,
        typingTimeout = -1,
        resetTimer = function() {
          clearTimeout(typingTimeout);

          typingTimeout = setTimeout(function() {
            self.parseFilters();
          }, typingDelay);
        };

    self.$filterGroups
      .filter('.checkboxes')
        .on('change', function() {
        self.parseFilters();
        });

    self.$filterGroups
      .filter('.search')
      .on('keyup change', resetTimer);

    self.$reset.on('click', function(e){
      e.preventDefault();
      self.$filterUi[0].reset();
      self.$filterUi.find('input[type="text"]').val('');
      self.parseFilters();
    });
  },


  parseFilters: function(){
    var self = this;


    for(var i = 0, group; group = self.groups[i]; i++){
      group.active = []; // reset arrays
      group.$inputs.each(function(){
        var searchTerm = '',
                $input = $(this),
            minimumLength = 3;

        if ($input.is(':checked')) {
          group.active.push(this.value);
        }

        if ($input.is('[type="text"]') && this.value.length >= minimumLength) {
          searchTerm = this.value
            .trim()
            .toLowerCase()
            .replace(' ', '-');

          group.active[0] = '[class*="' + searchTerm + '"]';
        }
      });
        group.active.length && (group.tracker = 0);
    }

    self.concatenate();
  },


  concatenate: function(){
    var self = this,
          cache = '',
          crawled = false,
          checkTrackers = function(){
        var done = 0;

        for(var i = 0, group; group = self.groups[i]; i++){
          (group.tracker === false) && done++;
        }

        return (done < self.groups.length);
      },
      crawl = function(){
        for(var i = 0, group; group = self.groups[i]; i++){
          group.active[group.tracker] && (cache += group.active[group.tracker]);

          if(i === self.groups.length - 1){
            self.outputArray.push(cache);
            cache = '';
            updateTrackers();
          }
        }
      },
      updateTrackers = function(){
        for(var i = self.groups.length - 1; i > -1; i--){
          var group = self.groups[i];

          if(group.active[group.tracker + 1]){
            group.tracker++;
            break;
          } else if(i > 0){
            group.tracker && (group.tracker = 0);
          } else {
            crawled = true;
          }
        }
      };

    self.outputArray = [];

      do{
          crawl();
      }
      while(!crawled && checkTrackers());

    self.outputString = self.outputArray.join();



    !self.outputString.length && (self.outputString = 'all');

    console.log(self.outputString);


      if(self.$container.mixItUp('isLoaded')){
        self.$container.mixItUp('filter', self.outputString);
      }
  }
};


;(function($){


  multiFilter.init();


  $('#Container').mixItUp({
    controls: {
      enable: false
    },
    animation: {
      easing: 'cubic-bezier(0.86, 0, 0.07, 1)',
      queueLimit: 3,
      duration: 600
    }
  });
})(jQuery);