
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.toastr = require('toastr');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('vc-users', require('./components/Users.vue'));

const app = new Vue({
    el: '#app',
    data: {
    	title: 'Listado de Usuarios',
    }
});

const crud = new Vue({
    el: '#crud',
    created: function() {
    	this.getKeeps();
    },
    data: {
    	title: 'CRUD Laravel y VUEjs',
    	keeps: [],
        newKeep: '',
        fillKeep: {'id': '' ,'keep': ''},
        errors: []
    },
    methods: {
    	getKeeps: function() {
    		var urlKeeps = 'tasks';
    		axios.get(urlKeeps).then(response => {
    			this.keeps = response.data
    		});
    	},
        deleteKeep: function (keep) {
            var url = 'tasks/' + keep.id;
            axios.delete(url).then(response => { // Delete
                this.getKeeps(); // List / Refresh
                toastr.success('Removed successfully'); // Show message
            });
        },
        editKeep: function (keep) {
            this.fillKeep.id = keep.id;
            this.fillKeep.keep = keep.keep;
            $('#edit').modal('show');
        },
        updateKeep : function (id) {
            var url = 'tasks/' + id;
            axios.put(url, this.fillKeep).then(response => { // Update
                this.getKeeps(); // List / Refresh
                this.fillKeep = {'id': '' ,'keep': ''}; // Clean fillKeep
                this.errors = []; // Clean last errors
                $('#edit').modal('hide');
                toastr.success('Task updated successfully'); // Show message
            }).catch(error => {
                this.errors = error.response.data
            });
        },
        createKeep: function () {
            var url = 'tasks/';
            axios.post(url, {
                keep: this.newKeep
            }).then(response => {
                this.getKeeps(); // Clean last create
                this.newKeep = ''; // Clean last errors
                this.errors = [];
                $('#create').modal('hide');
                toastr.success('Task created successfully');
            }).catch(error => {
                this.errors = error.response.data
            });
        },
    }
});

//var urlUsers = 'https://randomuser.me/api/?results=10';
var urlUsers = 'https://jsonplaceholder.typicode.com/users';
const users = new Vue({
	el: '#users',
	created: function() {
		this.getUsers();
	},
	data: {
		title: 'VUEjs - AJAX axios',
		lists: []
	},
	methods: {
		getUsers: function() {
			axios.get(urlUsers).then(response => {
				this.lists = response.data
			});
		}
	}
});
