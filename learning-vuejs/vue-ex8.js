Vue.component('tasks', {
    template: '#tasks-template',
    props: ['list']
});

new Vue({
    el: '#app',
    data: {
        tasks: [
            { body : 'Go to store', completed: false },
            { body : 'Go to store', completed: false },
        ]
    },
    methods: {
        toggleCompletedFor: function(task) {
            task.completed = !task.completed;
        }
    }
});