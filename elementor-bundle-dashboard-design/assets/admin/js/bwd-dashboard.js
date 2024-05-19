jQuery(document).ready(function($){

    // Main Tab----------------------------------------
    function settingTab(){
        $(".bwd-admin-setting-tab").not(":first").hide();
        $(".bwd-tab-list:first").addClass("bwd-active");
        $(".bwd-admin-setting-tab:first").addClass("bwd-active");
        $(".bwd-tab-list").click(function(){
            $(".bwd-tab-list").removeClass("bwd-active");
            $(".bwd-admin-setting-tab").removeClass("bwd-active");
            $(this).addClass("bwd-active");
            var tabId = $(this).find("a").attr("href");
            $(tabId).addClass("bwd-active");
            $(".bwd-admin-setting-tab").not(tabId).hide();
            $(tabId).fadeIn();
            return false;
        });
    }
    settingTab();


    // Widget Search Filter----------------------------------------
    function widgetSearch() {
        const $userName = $("#search-input");
        const $userItems = $(".col-search");
        const $mainTitle = $(".bwd-widgets-heading");
        const $container = $(".bwd-widgets-item-container");
        $userName.on('input', function(e) {
            const val = $(this).val().trim().toLowerCase(); 
            val ? $mainTitle.css('display', 'none') : $mainTitle.css('display', 'block');
            val ? $container.css('marginBottom', '20px') : $container.css('marginBottom', '');
            $userItems.each(function() {
                const title = $(this).find(".bwd-widgets-title h6").text().trim().toLowerCase(); 
                !title.includes(val) ? $(this).css('display', 'none') : $(this).css('display', 'block');
            });
        });
    }
    widgetSearch();

    // Extension Search Filter----------------------------------------
    function extensionSearch() {
        const $userNameEx = $("#exsearch-input");
        const $userItemsEx = $(".excol-search");
        const $mainTitleEx = $(".bwd-extension-heading");
        $userNameEx.on('input', function(e) {
            const valEx = $(this).val().trim().toLowerCase(); 
            valEx ? $mainTitleEx.css('display', 'none') : $mainTitleEx.css('display', 'block');
            $userItemsEx.each(function() {
                const titleEx = $(this).find(".bwd-widgets-title h6").text().trim().toLowerCase(); 
                !titleEx.includes(valEx) ? $(this).css('display', 'none') : $(this).css('display', 'block');
            });
        });
    }
    extensionSearch();


    // Button All, Free, Pro----------------------------------------
    function buttonAllFreePro() {
        const buttons = {
            all: $(".bwd-all-widgets-button"),
            free: $(".bwd-free-widgets-button"),
            pro: $(".bwd-pro-widgets-button")
        };
        const items = $(".col-search, .excol-search");
        function filterWidgets(filterType) {
            items.each(function() {
                const isProItem = $(this).find('.bwd-widget-pro-badge').length > 0;
                const shouldDisplay = filterType === 'all' || (filterType === 'free' && !isProItem) || (filterType === 'pro' && isProItem);
                $(this).css('display', shouldDisplay ? 'block' : 'none');
            });
        }
        $.each(buttons, function(key, value) {
            value.click(function() {
                // Remove 'okx' class from all buttons
                buttons.all.add(buttons.free).add(buttons.pro).removeClass('active-color');
                // Add 'okx' class to the clicked button
                $(this).addClass('active-color');
                filterWidgets(key);
            });
        });
    }
    buttonAllFreePro();
        

    // Button Disable All, Enable All----------------------------------------
    function buttonEnDiAll() {
        const $switch = $('.bwd-widgets-items .bwd-widget-switch #bwd-widinput-switch');
    
        // Iterate over each switch and attach click event
        $switch.each(function() {
            $(this).click(function() {
                $(this).is(':checked') ? $(this).attr('checked', 'checked') : $(this).removeAttr('checked');
            });
        });
    
        // Enable all switches
        $('.bwd-widget-enable-all').click(function() {
            $switch.prop('checked', false).trigger('click');
        });
    
        // Disable all switches
        $('.bwd-widget-disable-all').click(function() {
            $switch.prop('checked', true).trigger('click');
        });
    }
    
    buttonEnDiAll();
    

    function buttonEnDiAllEx() {
        const $switch = $('.bwd-widgets-items .bwd-widget-switch #bwd-exteninput-switch');

        $switch.each(function() {
            $(this).click(function() {
                $(this).is(':checked') ? $(this).attr('checked', 'checked') : $(this).removeAttr('checked');
            });
        });
   
        // Enable all switches
        $('.bwd-ex-enable-all').click(function() {
            $switch.prop('checked', false).trigger('click');
        });
    
        // Disable all switches
        $('.bwd-ex-disable-all').click(function() {
            $switch.prop('checked', true).trigger('click');
        });
 
    }
    buttonEnDiAllEx();

    function integrationsButton(){
        $('.bwd-integrations-button a').each(function(){
            $(this).click(function(e){
                e.preventDefault();
                $(this).text('Loading...');
            });
        });
    }
    integrationsButton();

});


(function bwdDoughnutChart(){

    const ctx = document.getElementById('bwdCanvasChart').getContext('2d');

    const data = {
        labels: ['Active', 'Inactive'],
        datasets: [{
          borderWidth: 0,
          borderRadius:[
            {
                innerEnd: 0,
                outerEnd:  0, 
                innerStart: 10, 
                outerStart: 10
            },
            {
                innerEnd: 10,
                outerEnd:  10, 
                innerStart: 0, 
                outerStart: 0
            }
         ],
          circumference: 300,
          backgroundColor: [ '#447af5', '#fc499f', ],
        }]
      };
    
      // config 
      const config = {
        type: 'doughnut',
        data,
      };
    
      // render init block
      const myChart = new Chart(ctx, config);

      function updateChart() {
        const $switches = $('.bwd-widgets-items .bwd-widget-switch #bwd-widinput-switch');
        const countTotal = $switches.length;
        const count = $switches.filter(':checked').length;
        $('#bwdCanvasChart').attr('data-count', count);

        myChart.data.datasets[0].data[0] = count;
        myChart.data.datasets[0].data[1] = countTotal - count; // Adjust this logic as needed
        myChart.update();
    }

    const $switches = $('.bwd-widgets-items .bwd-widget-switch #bwd-widinput-switch');
    $switches.each(function () {
        $(this).click(updateChart);
    });

    updateChart();

})();




