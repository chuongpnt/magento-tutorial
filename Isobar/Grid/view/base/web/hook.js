// define([], function(){
//     'use strict';
//     console.log("Called this Hook.");
//     return function(targetModule){
//         targetModule.crazyPropertyAddedHere = 'yes';
//         return targetModule;
//
//     };
// });

define([], function ($) {
    'use strict';

    return function (Component) {
        return Component.extend({

            functionYouAreOverriding: function () {
                this._super(); // This will run the original function, you may or may not need this.

                //... Your new code
            }
        });
    }
});
