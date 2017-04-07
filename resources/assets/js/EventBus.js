// Create Global Event Bus
// Create Vue
var EventBus = new Vue();

// Add to Vue Properties getter
Object.defineProperties(Vue.prototype, {
   $bus: {
       get: function () {
           return EventBus;
       }
   }
});