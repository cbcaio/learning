Vue.component('counter', {
    props: ['subject'],

    data: function() {
        return { count: 0 };
    },

    template: '#counter-template'
});

Vue.component('hello', {
    template: '<h4>Hello World</h4>'
});


new Vue({
    el: '#app'
});
