define([ 'uiComponent'], function ( Component) {
        'use strict';
        return Component.extend({
            initialize: function () {
                this._super();
            },
            getStaffData: function () {
                //return this.title1;
                return this.testViewModel;
            }
        });
    }
)
