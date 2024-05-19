/**
 * Start chart widget script
 */

 ( function( $, elementor ) {

   'use strict';

   var widgetChart = function( $scope, $ ) {

    var $chart        = $scope.find( '.bdt-chart' ),
    $chart_canvas = $chart.find( '> canvas' ),
    settings      = $chart.data('settings'),
    suffixprefix  = $chart.data('suffixprefix');

    if ( ! $chart.length ) {
      return;
    }

    elementorFrontend.waypoint( $chart_canvas, function() {
      var $this   = $( this ),
      ctx     = $this[0].getContext('2d'),
      myChart = new Chart(ctx, settings);

      var thouSeparator = settings.valueSeparator,
      sepratorSymbol = settings.sepratorSymbol,
      xAxesSeparator = settings.xAxesSeparator,
      yAxesSeparator = settings.yAxesSeparator;
      var _k_formatter   = (settings.kFormatter == 'yes') ? true : false; 

      
                // start update
                 // s_p_status = s=suffix, p = prefix 
                 var 
                 s_p_status = (typeof suffixprefix.suffix_prefix_status !== 'undefined') ? suffixprefix.suffix_prefix_status : 'no',

                 x_prefix = (typeof suffixprefix.x_custom_prefix !== 'undefined') ? suffixprefix.x_custom_prefix : '',
                 x_suffix = (typeof suffixprefix.x_custom_suffix !== 'undefined') ? suffixprefix.x_custom_suffix : '',

                 y_suffix = (typeof suffixprefix.y_custom_suffix !== 'undefined') ? suffixprefix.y_custom_suffix : '',
                 y_prefix = (typeof suffixprefix.y_custom_prefix !== 'undefined') ? suffixprefix.y_custom_prefix : '';

                // toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") 

                function addCommas(nStr, sepratorSymbol, _k_formatter) {
                  nStr += '';
                  var x = nStr.split('.');
                  var x1 = x[0];
                  var x2 = x.length > 1 ? '.' + x[1] : '';
                  var rgx = /(\d+)(\d{3})/;
                  while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + sepratorSymbol + '$2');
                  }
                  

                  if( _k_formatter == true ){
                    if (nStr >= 1000000000) {
                      return (nStr / 1000000000).toFixed(1).replace(/\.0$/, '') + 'G';
                    }
                    if (nStr >= 1000000) {
                      return (nStr / 1000000).toFixed(1).replace(/\.0$/, '') + 'M';
                    }
                    if (nStr >= 1000) {
                      return (nStr / 1000).toFixed(1).replace(/\.0$/, '') + 'K';
                    }
                    return nStr;
                  }else{
                    return x1 + x2;
                  }

                }


                function updateChartSetting(chart, thouSeparator = 'no', sepratorSymbol = ',') {
                  chart.options = {
                    scales: { 
                      xAxes: [{
                        ticks: {
                          callback: function(value, index, values) {
                                        // return '$' + value + '%';
                                        // return x_prefix + value + x_suffix;
                                        if(s_p_status == 'yes' && thouSeparator == 'yes' && xAxesSeparator == 'yes'){
                                          return x_prefix + addCommas(value, sepratorSymbol, _k_formatter)  + x_suffix;
                                        }else if(s_p_status == 'no' && thouSeparator == 'yes' && xAxesSeparator == 'yes'){
                                          return addCommas(value, sepratorSymbol, _k_formatter);
                                        }else{
                                          return x_prefix + value + x_suffix;
                                        }
                                      }
                                    }
                                  }],
                                  yAxes: [{
                                    ticks: {
                                      callback: function(value, index, values) {
                                        // return y_prefix + value + y_suffix;
                                        if(s_p_status == 'yes' && thouSeparator == 'yes' && yAxesSeparator == 'yes'){
                                          return y_prefix + addCommas(value, sepratorSymbol, _k_formatter) + y_suffix;
                                        }else if(s_p_status == 'no' && thouSeparator == 'yes' && yAxesSeparator == 'yes'){
                                          return addCommas(value, sepratorSymbol, _k_formatter);
                                        }else{
                                          return y_prefix + value + y_suffix;
                                        }
                                      }
                                    }
                                  }],

                                }

                              };
                              chart.update();
                            }
                            if(s_p_status == 'yes' && thouSeparator == 'no'){
                              updateChartSetting(myChart);
                            }else if(s_p_status == 'yes' && thouSeparator == 'yes'){
                              updateChartSetting(myChart, thouSeparator, sepratorSymbol);
                            }else if(s_p_status == 'no' && thouSeparator == 'yes'){
                              updateChartSetting(myChart, thouSeparator, sepratorSymbol);
                            }else{

                            }
                // end update

              }, {
                offset: 'bottom-in-view'
              } );

};


jQuery(window).on('elementor/frontend/init', function() {
  elementorFrontend.hooks.addAction( 'frontend/element_ready/bdt-chart.default', widgetChart );
});

}( jQuery, window.elementorFrontend ) );

/**
 * End chart widget script
 */
