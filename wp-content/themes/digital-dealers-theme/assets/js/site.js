'use strict';

$ = require('jquery');

const wow = require('./site/wow');
const Navigation = require('./core/navigation');
const equalheight = require('./site/equalheight');
const addremoveclass = require('./site/addremoveclass');
const example = require('./site/example');

jQuery( function(){
  
  /**
   * Initialize site wow
   */
   wow.init();

  /**
   * Initialize site navigation
   */
  Navigation.init();
   /**
   * Initialize equalheight module
   */
    equalheight.init();

  /**
   * Initialize addremoveclass module
   */
   addremoveclass.init();
 
  /**
   * Initialize sample module
   */
  example.init();

});