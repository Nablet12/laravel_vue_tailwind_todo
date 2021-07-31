require('./bootstrap');

import Vue from 'vue';

import Project from './Components/Project.vue';
import Task from './Components/Task.vue';

import router from './router'

new Vue({
    el: '#app',
    /*data: {
        msg: 'Test Message'
    }*/
    router,
    components: {
        'project': Project,
        'task': Task
    }
})