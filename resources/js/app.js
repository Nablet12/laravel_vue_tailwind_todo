require('./bootstrap');

import Vue from 'vue';

import Project from './Components/Project.vue';
import Task from './Components/Task.vue';

new Vue({
    el: '#app',
    /*data: {
        msg: 'Test Message'
    }*/
    components: {
        'project': Project,
        'task': Task
    }
})